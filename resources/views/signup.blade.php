@extends('template')

@section('title', 'Signup')

@section('content')

<x-header-login/>

<body id="bg-login">
    <div class="container p-5 my-5 border" style="border-radius: 10pt; width: 60%; background-color: white;">
        <div class="container-fluid" style="background: linear-gradient(#7b7b7b, #7b7b7b) no-repeat center/0.5px; padding: 10px;">
            <div class="row">
                <div class="col-lg-6" style="width: 40%; margin-left: -15px; margin-top: 90px;">
                    <div class="login-icon-img">
                        <img src="{{asset('img/login-icon.png')}}" alt="">
                    </div>
                    <br>
                    <p style="font-size: 12px; text-align:right;">Already have an account? <b><a href="login" style="text-decoration: underline; color: black;">Login</a></b></p>
                </div>
                <div class="col-lg-6" style="width: 42%; margin-left: 125px;">
                    <p style="font-size: 22px; text-align:center;">SignUp</p>
                    <form action="{{ route('signup.post') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="firstname" style="font-size: 14px;">First Name</label>
                            <input class="form-control" type="text" name="firstname" id="form-login" required>
                            @if ($errors->has('firstname'))
                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="lastname" style="font-size: 14px;">Last Name</label>
                            <input class="form-control" type="text" name="lastname" id="form-login" required>
                            @if ($errors->has('lastname'))
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email" style="font-size: 14px;">Email</label>
                            <input class="form-control" type="email" name="email" id="form-login" required>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
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
                        <br>
                        <button type="submit" class="login-btn"><b>SIGNUP</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<x-footer/>

@endsection()