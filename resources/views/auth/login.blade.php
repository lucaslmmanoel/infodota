@extends('layouts.app') @section('content')



<div class="container">
    <div class="row text-center">
        <div class="col-lg-4 mt-5 ml-auto mr-auto">
            <div class="card">
                <h3 class="title">Bem Vindo </h3>


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-sm-7 col-form-label text-md-right">{{ __('E-Mail') }}
                            <i class="fa fa-user"></i>
                        </label>

                        <div class="col-md-10 offset-md-1">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                required autofocus> @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row center">
                        <label for="password" class="col-sm-7 col-form-label text-md-right">{{ __('Password') }}
                            <i class="fa fa-lock"></i>
                        </label>

                        <div class="col-md-10 offset-md-1">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required> @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Entrar') }}
                                <i class="fa fa-send"></i>
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