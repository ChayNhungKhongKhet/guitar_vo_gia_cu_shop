<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .font-time {
            font-family: sans-serif;
            font-weight: bold;
        }

        #loginForm {
            min-height: 100vh;
            align-items: center;
        }


        .card {
            width: 100%;
            max-width: 400px;
            margin: auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .custom-control-label {
            font-weight: normal;
        }

        .btn-google,
        .btn-facebook,
        .btn-info {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
        }

        .btn-google i,
        .btn-facebook i,
        .btn-info i {
            margin-right: 10px;
        }

        #submit {
            width: 100%;
        }

        .facebook {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" id="loginForm">
            <section class="offset-md-3 col-md-6">
                <div class="card shadow p-5">
                    <h3 class="text-center mb-3 font-time"> LOGIN </h3>
                    <form action="/loginPost" method="POST">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control rounded-pill"
                                placeholder="Enter Your Username" value="{{old('username')}}"/>
                            <span class="text-danger">@error('username')
                                    {{$message}}
                                    @enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control rounded-pill"
                                placeholder="Enter Your Password"/>
                            <span class="text-danger">@error('password')
                                    {{$message}}
                                    @enderror</span>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>
                        <button class="btn btn-block btn-info rounded-pill" type="submit" id="submit">Login</button>
                    </form>
                    <hr>
                    <a href="index.html" class="btn btn-danger rounded-pill btn-block">
                        <i class="fab fa-google fa-fw" id="google"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-primary rounded-pill btn-block" style="margin-top: 10px">
                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                    <hr>
                    <div class="text-center">
                        <a class="font-time" href="#">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="font-time" href="/signup">Create an Account!</a>
                    </div>

                </div>

            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validate() {
            let username = $("#username").val();
            let password = $("#password").val();

            if (username == "" || password == "") {
                Swal.fire({
                    icon: "warning",
                    title: "Error",
                    text: "Please fill all the fields!"
                });
                return false;
            }
        }
    </script>
</body>
</html>
