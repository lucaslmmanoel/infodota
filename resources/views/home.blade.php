@extends('layouts.app')

@section('content')
    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img.jpg')}}');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center mt-2">
                <div class="card" style="background-color: transparent;">

                    <div class="card-header">
                        <img src="{{'imgs/logo.png'}}" alt="">
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p class="text-white">Bem vindo ao dota info, um lugar para ter noticias sobre dota, agendar partidas apostadas ou não e muito mais!</p>

                    </div>
                    <div class="col-lg-12">
                        <a href="" class="btn btn-link text-success btn-large btn-round"> Mais informações <i class="fa fa-plus"></i>  </a>
                        <a href="{{route('match.index')}}" class="btn btn-link btn-danger btn-round"> Agende uma Partida<i class="fa fa-key"></i>  </a>
                        <a href="" class="btn btn-link btn-danger btn-round"> Faça uma aposta <i class="fa fa-money"></i>  </a>
                        <a href="" class="btn btn-link btn-success  btn-round"> Confira os proximos jogos <i class="fa fa-gamepad"></i>  </a>
                        <a href="{{route('leagues.index')}}" class="btn btn-link btn-success btn-large btn-round"> Ver as ligas<i class="fa fa-eye"></i>  </a>
                        <a href="{{route('times.index')}}" class="btn btn-link btn-danger btn-large btn-round"> Ver os Times<i class="fa fa-users"></i>  </a>
                        <a href="{{route('rankings.index')}}" class="btn btn-link btn-success  btn-large btn-round"> Ver o Ranking Mundial<i class="fa fa-users"></i>  </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
