@extends('layouts.app')

@section('content')
    <div class="filter"></div>
    <div class="section section-image section-login" style="background-image: url('{{('imgs/bg_img_1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ml-auto mr-auto ">

                    <div class="card mt-5" style="background-color: transparent;">
                        <div class="card-header text-center">
                            <h3 class="text-white">Registre-se</h3>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                       class="col-sm-7 col-form-label text-md-right text-white">{{ __('Nome') }} <i
                                        class="fa fa-user"></i> </label>

                                <div class="col-md-10 offset-md-1">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-7 col-form-label text-md-right text-white">{{ __('E-Mail') }}
                                    <i class="fa fa-message"></i> </label>

                                <div class="col-md-10 offset-md-1">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-sm-7 col-form-label text-md-right text-white">{{ __('Senha') }}</label>

                                <div class="col-md-10  offset-md-1">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? 'Senha inválida' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-sm-8 col-form-label text-md-right text-white">{{ __('Confirme a Senha') }}</label>

                                <div class="col-md-10  offset-md-1">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 ml-auto mr-auto mb-4 mt-4">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Cadatrar-se') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="social-line text-center mb-3">
                            <a href="#pablo" >
                                <i class="fa fa-facebook-square text-danger mr-3" style="font-size: 20px"></i>
                            </a>
                            <a href="#pablo" >
                                <i class="fa fa-google-plus text-danger mr-3" style="font-size: 20px"></i>
                            </a>
                            <a href="#pablo" >
                                <i class="fa fa-twitter text-danger mr-3" style="font-size: 20px"></i>
                            </a>
                        </div>
                    </div>
                </div>


@endsection
