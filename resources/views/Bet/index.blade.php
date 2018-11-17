@extends('layouts.app')
@section('content')
    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_9.jpg')}}');">
        <div class="row mt-5">
            <div class="container">
                <div class="motto text-center">
                    <div class="card" style="margin-top: 100px">
                        <a href="{{route('match.index')}}" class="btn btn-outline-danger">Crie uma nova partida <i
                                class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
