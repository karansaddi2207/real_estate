@extends('user.layouts.master')

@section('custom_css')

    <style type="text/css">
        #login_form input{
        border-radius: 20px;
        height: 50px;
        padding-left: 25px;
        font-size: 15px;
        }
        #login_form input:focus{
            border:1px solid gray;
            box-shadow: none;
        }
        #login_form label{
            margin-left: 20px;
            font-size: 15px;
            color: gray;
        }
        #login_form button{
            
            background:#800080;
            color: #fff;
            width: 30%;
            height: 50px;
            border-radius: 50px;
            border:none;
        }
        #login_form button:hover{
            background:#400040;
            color:#fff;
        }

        #login_form .error{
            color:red;
        }
    </style>

@endsection

@section('main_content')

    <section class="page-top-section set-bg" data-setbg="{{ asset('frontend/img/page-top-bg.jpg') }}">
        <div class="container text-white">
            <h2>LOGIN</h2>
        </div>
    </section>
    <!--  Page top end -->

    <!-- Breadcrumb -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href=""><i class="fa fa-home"></i>Home</a>
            <span><i class="fa fa-angle-right"></i>Login</span>
        </div>
    </div>

    <section class="page-section" style="margin-top: -200px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="bg-info card-header text-center text-white" style="font-size:25px">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" id="login_form">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div><br>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0 login-with-fb">
                                    <div class="" style="margin: auto;">
                                        <a href="{{ url('/login/facebook') }}">
                                            <span>Or</span><br/>
                                            <img src="{{ asset('img/fb.png') }}">
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
