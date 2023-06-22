@extends('template')

@section('title', 'Login')

@section('content')

<x-header-login/>

<body id="bg-login">
    <div class="container p-5 my-5 border" style="border-radius: 10pt; width: 60%; background-color: white;">
        <div class="container-fluid" style="background: linear-gradient(#7b7b7b, #7b7b7b) no-repeat center/0.5px; padding: 10px;">
            <div class="row">
                <div class="col-lg-6" style="width: 40%; margin-left: -15px; margin-top: 30px;">
                    <div class="login-icon-img">
                        <img src="{{asset('img/login-icon.png')}}" alt="">
                    </div>
                    <br>
                    <p style="font-size: 12px; text-align:right;">Don't have an account yet? <b><a href="signup" style="text-decoration: underline; color: black;">SignUp</a></b></p>
                </div>
                <div class="col-lg-6" style="width: 42%; margin-left: 125px;">
                    <p style="font-size: 22px; text-align:center;">Login</p>
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username" style="font-size: 14px;">Username</label>
                            <input class="form-control" type="text" name="username" id="form-login" required>
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password" style="font-size: 14px;">Password</label>
                            <input class="form-control" type="password" name="password" id="form-login" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <p style="text-decoration: underline; font-size:11px; text-align:right;"><a href="#" style="color: black;">Forgot Password?</a></p>
                        <button type="submit" class="login-btn"><b>LOGIN</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<x-footer/>

@endsection()
