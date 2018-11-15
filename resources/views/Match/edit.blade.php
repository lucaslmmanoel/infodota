@extends('layouts.app')


@section('content')

    @can('isAdmin')
        <div class="page-header" data-parallax="true"
             style="background-image: url('{{asset('imgs/BACKGROUND.jpg')}}');">
            <div class="filter"></div>
            <div class="container" id="menu-dropdown">
                <div class="row text-center mt-5">
                    <div class="col-md-6">
                        <div class="card mt-5 shadow-lg"
                             style="background-image: url('{{asset('imgs/bg_img_6.jpg')}}');">
                            <div class="card-header">
                                <h3 class="text-white">Agende aqui uma pártida e veja o dinheiro surgir</h3>
                            </div>
                            <div class="card-body">
                                <h3 class="text-uppercase text-white">Regras da Pártida</h3>
                                <p class="text-uppercase text-center text-white">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. A aliquam animi aspernatur consectetur dolore et excepturi ipsum
                                    iure labore magnam minima modi omnis provident quam quis, temporibus vel vitae
                                    voluptate?</p>
                            </div>
                            <div class="card-footer">
                                <h3 class="text-white">FOLLOW US</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tim-title">
                            <div class="card mt-5 shadow-lg" style="background-color:transparent;">
                                <div class="card-head">
                                    <h1 class="text-white-50 mt-3">Agende aqui uma Partida</h1>
                                    <img src="{{'imgs/logo.png'}}" alt="">
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{url('match')}}">
                                        @csrf
                                        <input name="_method" type="hidden" value="PATCH">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="time1"><h3> 1º TIME </h3></label>
                                                <select class="form-control" id="time1" name="first_team">
                                                    <option value="">Selecione o 1 º Time</option>
                                                </select>
                                                <br>
                                                <label class="label" for="time2"><h3>2º TIME </h3></label>
                                                <select class="form-control" id="time2" name="second_team">
                                                    <option value="">Selecione o 2 º Time</option>
                                                </select>
                                                <br>
                                                <label class="label" for="data"><h3>Dia da partida </h3></label>
                                                <input class="form-control" value="{{$match->match_date}}" type="date" name="match_date" id="data">
                                                <br>

                                                <label class="label" for="time"><h3>Hora da partida </h3></label>
                                                <input class="form-control" value="{{$match->time_date}}" type="time" name="time_date" id="time">
                                                <br>
                                                <input type="submit" class="btn btn-success">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan

@endsection
