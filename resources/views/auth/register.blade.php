@extends('layouts.app')

@section('content')
                  
                
<div class="container">
    <div class="row text-center">
        <div class="col-lg-4 mt-5 ml-auto mr-auto">
            <div class="card">
                <h3 class="title">Bem Vindo </h3>



                
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-7 col-form-label text-md-right">{{ __('Name') }} <i class="fa fa-user"></i> </label>
                            
                            <div class="col-md-10 offset-md-1">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-8 col-form-label text-md-right">{{ __('E-Mail Address') }} <i class="fa fa-message"></i> </label>

                            <div class="col-md-10 offset-md-1">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
                




                <div class="social-line text-center mb-3">
                    <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
                <div class="forgot">

                    <a class="btn btn-danger mb-3" href="{{ route('password.request') }}">
                        {{ __('Esqueceu tua Senha?') }}
                    </a>
                </div>
            </div>

                
                
                
                
                
                
                
@endsection
