@extends('auth.main')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                   <img src="{{URL::asset('img/home/img/Invitation-Card.png')}}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                 {{ csrf_field() }}
                    <span class="login100-form-title">
                        Member Registeration
                    </span>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required">
                        <input class="input100" id="name" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required >
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required >
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
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </span>
                    </div>
    
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ route('login') }}">
                            Login Here
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
