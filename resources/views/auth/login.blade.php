@extends('layouts.app') @section('content')

    <div class="section section-image section-login" style="background-image: url('{{('imgs/bg_img.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ml-auto mr-auto ">

                    <div class="card mt-5" style="background-color: transparent;">
                        <div class="card-header text-center">
                            <h3 class="text-white">Login</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-7 col-form-label text-md-right text-white">{{ __('E-Mail') }}
                                    <i class="fa fa-user"></i>
                                </label>

                                <div class="col-md-10 offset-md-1">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}"
                                           required autofocus> @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row center">
                                <label for="password"
                                       class="col-sm-7 col-form-label text-md-right text-white">{{ __('Password') }}
                                    <i class="fa fa-lock"></i>
                                </label>

                                <div class="col-md-10 offset-md-1">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password"
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
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-12 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Entrar') }}
                                        <i class="fa fa-send"></i>
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
                        <div class="forgot">

                            <a class="btn btn-link text-danger mb-3 offset-md-2" href="{{ route('password.request') }}">
                                {{ __('Esqueceu tua Senha') }} <i class="fa fa-question"></i>
                            </a>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
