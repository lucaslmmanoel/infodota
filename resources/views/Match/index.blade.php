@extends('layouts.app')


@section('content')
    <div class="page-header" data-parallax="true" style="background-image: url('{{('imgs/bg_img_4.jpg')}}');">
        <div class="row mt-5">
            <div class="container">
                <div class="motto text-center">
                    <div class="card" style="margin-top: 100px">
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
                                                <a class="btn btn-small btn-warning"
                                                   href="{{ URL::to('match/' . $match->id . '/edit') }}">Atualizar <i
                                                        class="fa fa-pencil"></i>
                                                </a>

                                                <form action="{{action('MatchController@destroy', $match->id )}}"
                                                      method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-outline-danger" type="submit">DELETAR
                                                    </button>
                                                </form>

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
