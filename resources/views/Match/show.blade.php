@extends('layouts.app')


@section('content')
    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_1.jpg')}}');">
    <div class="filter"> </div>
        <div class="row mt-5">
            <div class="container">
                <div class="motto text-center">
                    <div class="card">
                        <h1>Aposta do dia {{$match->match_date}} as {{$match->time_date}} </h1>

                            <h3>
                                <strong>Time:</strong> {{ $match->first_team }}
                                VS
                                <strong>Time:</strong> {{ $match->second_team }}
                            </h3>
                            <p>
                                Esta partida será incrível
                            </p>
                        <a href="{{url('')}}" class="btn btn-link">Faça uma aposta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
