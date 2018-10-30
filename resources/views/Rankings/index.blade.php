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
                            <th>Nome</th>
                        </tr>
                        </thead>

                        <tbody>


                        @foreach($data as $nome)
                            <tr>
                                <td scope="col"> {{$nome->personaname}} </td>
                            </tr>
                        @endforeach


                        </tbody>
                        <tr>
                    </table>
                </div>

            </div>
        </div>

@endsection
