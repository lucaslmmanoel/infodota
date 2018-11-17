@extends('layouts.app')


@section('content')
    <div class="page-header" data-parallax="true"
         style="background-image: url('{{asset('imgs/bg_img_7.jpg')}}');">
        <div class="filter"></div>
        <div class="container" id="menu-dropdown">
            <div class="row text-center mt-5">
                <div class="col-md-6">
                    <div class="card mt-5 shadow-lg"
                         style="background-image: url('{{asset('imgs/bg_img_5.jpg')}}');">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <h3 class="text-uppercase text-white">Regras da Aposta</h3>
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
                                <h1 class="text-white-50 mt-3">Crie aqui uma aposta!</h1>
                                <img src="{{'imgs/logo.png'}}" alt="">
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{url('bet')}}">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" type="text" name="id_match">
                                            <br>

                                            <label class="label" for="time"><h3>Quannto deseja apostar nessa
                                                    Partida?</h3></label>
                                            <input class="form-control" ype="number" min="0.00" max="10000.00"
                                                   step="0.01" name="money" id="money">
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
@endsection
