<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
class UserController extends Controller
{
    public function showSignup(){
        return view('home');
    }
    public function showLogin(){
        return view('login');
    }
    public function login(Request $request){
        $request -> validate([
            'username' => "required",
            'password' => "required"
       ]);
       $user = User::where('username','=', $request->username)->first();
       if ($user) {
        if (Hash::check($request->password, $user->password)) {
            $request->session()->put('remember_token', $user->remember_token);
            //check account admin
            if ($user->is_Admin == 0) {
                return redirect('/admin');
            } else {
                return redirect(route('home', ['username' => $user->username]));
            }
        } else {
            return back()->with('fail', 'The password does not match');
        }
    } else {
        return back()->with('fail', 'The username is not registered');
    }
    }
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

        return redirect()->route('account.index', $id)->with('success', 'Account updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('account.index')->with('success', 'Account deleted successfully!');
    }
}
