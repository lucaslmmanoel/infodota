@extends('layouts.app')

@section('content')
    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_2.jpg')}}');">
        <div class="filter"></div>
        <div class="container">
            <div class="col-md-6 mr-auto ml-auto">
                <div class="card shadow-lg" style="background-color: transparent">
                    <div class="card-header">
                        <div class="motto text-center">
                            <img class="mb-3 mt-4" src="{{'imgs/logo.png'}}" alt="">

                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="card-body">

                            <h5 class="text-white mt-5 mb-4 text-center">
                                Dota 2 é um jogo eletrônico do gênero Action Real-Time Strategy (abreviado como ARTS) ou
                                também considerado do gênero Multiplayer Online Battle Arena (abreviado como MOBA), foi
                                desenvolvido
                                pela Valve Corporation como sequência do Defense of the Ancients (DotA), uma modificação
                                (mod) em um
                                mapa desenvolvido para Warcraft III: The Frozen Throne.
                            </h5>
                            <div class="card-footer mt-5">
                                <a href="http://br.dota2.com/" target="_blank" class="btn btn-link btn-danger"> Mais
                                    informações
                                    <i
                                        class="fa fa-gamepad"></i> </a>
                                <a href="{{route('match.index')}}" class="btn btn-link btn-success"> Faça uma aposta <i
                                        class="fa fa-money"></i> </a>
                                <a href="{{route('match.create')}}" class="btn btn-link btn-danger"> Agende uma
                                    partida<i
                                        class="fa fa-money"></i> </a>
                                <a href="{{route('home')}}" class="btn btn-link btn-info"> Página Inicial <i
                                        class="fa fa-home"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
