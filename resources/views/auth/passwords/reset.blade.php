@extends('auth.main')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                   <img src="{{URL::asset('img/home/img/Invitation-Card.png')}}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('password.request') }}">
                 {{ csrf_field() }}
                 <input type="hidden" name="token" value="{{ $token }}">
                    <span class="login100-form-title">
                        Reset Password
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="email" name="email" placeholder="Email" value="{{ $email or old('email') }}" required autofocus>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" id="password" type="password" name="password" required  placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation" required  placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
    
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Reset Password
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Login Here
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection