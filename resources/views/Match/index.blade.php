@extends('layouts.app')


@section('content')
    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_4.jpg')}}');">
        <div class="row mt-5">
            <div class="container">
                <div class="motto text-center">
                    <div class="card">
                        <a href="{{route('match.create')}}" class="btn btn-outline-danger">Crie uma nova partida</a>
                        <table class="table table-bordered table-hover table-data">
                            <thead class="thead-dark">
                            <tr>
                                <td>Primeiro Time</td>
                                <td>Segundo Time</td>
                                <td>dia da partida</td>
                                <td>Hora da partida</td>
                                <td>Ações</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($matchs as $key => $match)
                                <tr>

                                    <td>
                                        {{$match->first_team}}
                                    </td>
                                    <td>
                                        {{$match->second_team}}
                                    </td>
                                    <td>
                                        {{$match->match_date}}
                                    </td>
                                    <td>
                                        {{$match->time_date}}
                                    </td>
                                    <td>
                                        <div class="row">
                                        @can('isAdmin')

                                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->

                                                <!-- we will add this later since its a little more complicated than the other two buttons -->


                                                <a class="btn btn-small btn-warning"
                                                   href="{{ URL::to('match/' . $match->id . '/edit') }}">Atualizar <i
                                                        class="fa fa-pencil"></i>
                                                </a>

                                                <a class="btn btn-small btn-danger"
                                                   href="{{ URL::to('match/' . $match->id . '/edit') }}">Delete <i
                                                        class="fa fa-trash"></i>
                                                </a>
                                            @endcan

                                            <a href="" class="btn btn-small btn-success">Faça uma aposta <i
                                                    class="fa fa-money"></i>
                                            </a>
                                            <a class="btn btn-small btn-info"
                                               href="{{ URL::to('match/' . $match->id) }}">Visualizar <i
                                                    class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
