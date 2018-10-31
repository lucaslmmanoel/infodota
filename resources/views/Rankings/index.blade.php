@extends('layouts.app')


@section('content')

    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_1.jpg')}}');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center" style="margin-top: 100px;">
                <div class="card">
                    <div class="card-header">
                        <form action="">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control" id="heroes" name="" id="heroes">
                                        <option  value="">Selecione o herói</option>
                                    </select>
                                    <br>
                                    <input type="submit" class="btn btn-success">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="card-body" id="table_heroes">
                        <table id="table_leagues" class="table table-striped table-bordered table-hover" >
                            <thead class="thead-dark">
                            <tr>
                                <th>Ranking Mundial por Herói</th>
                            </tr>
                            </thead>

                            <tbody>



                            {{--@foreach($data as $nome)--}}
                            {{--<tr>--}}
                            {{--<td scope="col"> {{$nome->}} </td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}

                            </tbody>
                            <tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
