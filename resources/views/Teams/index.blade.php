@extends('layouts.app')
@section('content')
    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_1.jpg')}}');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center" style="margin-top: 100px;">
                <div class="card">
                    <table id="table_leagues" class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>Nome do Time</th>
                            <th>Tag do time</th>
                            <th>logo do time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $nome)
                            <tr>
                                <td scope="col"> {{trim($nome->name) ? $nome->name : "Nome não encontrado"}}  </td>
                                <td scope="col"> {{$nome->tag ? $nome->tag : "Tag não encontrada"}}  </td>
                                <td scope="col"><img width="40px" heigth="40px" src="{{$nome->logo_url ? $nome->logo_url : asset('imgs/bg_img.jpg') }}" alt=""> </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
