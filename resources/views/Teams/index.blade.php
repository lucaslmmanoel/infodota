@extends('layouts.app')


@section('content')

    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_1.jpg')}}');">
        <div class="filter"></div>
        <div class="row mt-5">
            <div class="container">

                <div class="motto text-center" style="margin-top: 100px;">
                    <div class="card">
                            <thead class="thead-dark">
                            <tr>
                                <th>logo</th>
                                <th>Nome do Time</th>
                                <th>Partidas Ganhas</th>
                                <th>Partidas Perdidas</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($data as $nome)
                                
                                <tr>
                                    <td scope="col"><img src="{{$nome->logo_url ? $nome->logo_url : '' }}" width="40px" height="40px" alt="logo não encontrada">   </td>
                                    <td scope="col"> {{$nome->name ? $nome->name : 'Sem nome' }} </td>
                                    <td scope="col"> {{$nome->wins}} </td>
                                    <td scope="col"> {{$nome->losses}} </td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
