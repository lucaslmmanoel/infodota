@extends('layouts.app')


@section('content')
    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_4.jpg')}}');">
        <div class="filter"></div>
        <div class="container" id="menu-dropdown">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="tim-title">
                    <div class="card" style="background-color:transparent;">
                        <div class="card-head">
                        <h3 class="text-white-50 mt-3">Agende aqui uma Partida</h3>
                        <img src="{{'imgs/logo.png'}}" alt="">
                        </div>
                        <div class="card-body">
                            <form action="">
                <div class="col-md-6">
                    <div class="form-group">
								<label class="" for="">nome</label>
                                <input type="text" class="form-control" placeholder="Nome">
								<label class="" for="">nome</label>
                                <input type="date" class="form-control" placeholder="Nome">
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
