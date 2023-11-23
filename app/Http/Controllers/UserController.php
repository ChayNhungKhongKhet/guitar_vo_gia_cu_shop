<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
class UserController extends Controller
{
    public function showSignup(){
        return view('user.home');
    }
    public function showLogin(){
        return view('auth.login');
    }
      public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Nếu đăng nhập thành công, kiểm tra nếu người dùng là admin
            if (Auth::user()->is_Admin == 0) {
                return redirect('/admin');
            } else {
                return redirect(route('home'));
            }
        }

        return back()->withErrors(['username' => 'Invalid credentials']);
    }
    // public function login(Request $request){
    //     $request -> validate([
    //         'username' => "required",
    //         'password' => "required"
    //    ]);
    //    $user = User::where('username','=', $request->username)->first();
    //    if ($user) {
    //     if (Hash::check($request->password, $user->password)) {
    //         $request->session()->put('remember_token', $user->remember_token);
    //         //check account admin
    //         if ($user->is_Admin == 0) {
    //             return redirect('/admin');
    //         } else {
    //             return redirect(route('home', ['username' => $user->username]));
    //         }
    //     } else {
    //         return back()->with('fail', 'The password does not match');
    //     }
    // } else {
    //     return back()->with('fail', 'The username is not registered');
    // }
    // }
    public function signup(Request $request){
         $request -> validate([
            'username' => "required|unique:users",
            'email' => "required|email|unique:users",
            'password' => "required|min:5"
       ]);
       $user = new User();
       $user->username = $request->username;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->password = Hash::make($request->password);
       $res = $user->save();
       if($res){
            return back()-> with('success','You have register success');
       }else{
            return back()-> with('fail','Something wrong');
       }
    }
    public function logout(){
        if(Auth::logout()){
            return redirect(route('login'));
        }
        return redirect(route('home'));
    }
    // public function logout(){

    // }

    public function index()
    {
        $users = User::paginate(10);
        // dd($users);
        return view('admin.account.index', compact('users'));
    }

    public function create()
    {
        return view('admin.account.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'birthday' => 'required',
            
        ]);

        $gender = $request->input('gender') === 'Male' ? 0 : 1;

        User::create([
            'username' => $request->input('username'),
            //băm mật khẩu
            // 'password' => Hash::make($request->input('password')),
            'password' => $request->input('password'),
            'name' => $request->input('name'),
            'gender' => $gender,
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'birthday' => $request->input('birthday'),
        ]);

        return redirect()->route('account.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.account.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username,'.$id,
            'password' => 'nullable', // Để tránh cập nhật mật khẩu mỗi khi chỉnh sửa
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'birthday' => 'required|date',
        ]);
        
        $user = User::findOrFail($id);
        $gender =  $validatedData['gender'] === 'Male' ? 0 : 1;

        
        $user->update([
            'username' => $validatedData['username'],
            'name' => $validatedData['name'],
            'gender' => $gender,
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'birthday' => $validatedData['birthday'],
        ]);

        return redirect()->route('account.index')->with('success', 'Account updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('account.index')->with('success', 'Account deleted successfully!');
    }
    public function showChangePasswordForm()
    {
        return view('user.change-password');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:5',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Kiểm tra mật khẩu hiện tại có khớp không
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Incorrect current password']);
        }

        // Cập nhật mật khẩu mới
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('profile.change-password')->with('success', 'Password updated successfully');
    }

     public function editProfile()
    {
        $user = Auth::user();
        return view('user.edit_profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'birthday' => 'required|date',
            // Thêm các quy tắc xác thực cho các trường khác nếu cần
        ]);

        // Cập nhật thông tin cá nhân của người dùng
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'address' =>$request->address,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
        ]);

        return redirect(route('profile.edit_profile'))->with('success', 'Profile updated successfully');
    }
}
