@extends('layouts.app')


@section('content')
    @can('isAdmin')
        <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_4.jpg')}}');">
            <div class="filter"></div>
            <div class="container" id="menu-dropdown">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="tim-title">
                            <div class="card mt-5" style="background-color:transparent;">
                                <div class="card-head">
                                    <h1 class="text-white-50 mt-3">Agende aqui uma Partida</h1>
                                    <img src="{{'imgs/logo.png'}}" alt="">
                                </div>
                                <div class="card-body">
                                    <form action="#">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label  class="label" for="time1"> <h3> 1º TIME </h3></label>
                                                <select class="form-control" id="time1" name="">
                                                    <option value="">Selecione o 1 º Time</option>
                                                </select>
                                                <br>
                                                <label class="label" for="time2"> <h3>2º TIME </h3></label>
                                                <select class="form-control" id="time2" name="">
                                                    <option value="">Selecione o 2 º Time</option>
                                                </select>
                                                <br>
                                                <label class="label" for="data"><h3>Dia da partida </h3></label>
                                                <input class="form-control" type="date" name="" id="data">
                                                <br>

                                                <label class="label" for="time"><h3>Hora da partida </h3></label>
                                                <input class="form-control" type="time" name="" id="time">
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
