@extends('layouts.app')


@section('content')

    <div class="page-header" data-parallax="true"  
    >
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center" style="margin-top: 100px;">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="heroes">Herói</label>
                                <select class="form-control" id="heroes" name="" id="heroes">
                                    <option  value="">Selecione o herói</option>
                                </select>
                                <br>
                            </div>
                        </div>
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
