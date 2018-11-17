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

                                        <div class="row ml-auto mr-auto">
                                            <div class="dropdown">
                                                <button class="btn btn-outline-danger  dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    Opções
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    @can('isAdmin')
                                                        <a class="btn btn-small btn-link"
                                                           href="{{ URL::to('match/' . $match->id . '/edit') }}">Atualizar
                                                            <i
                                                                class="fa fa-pencil"></i>
                                                        </a>
                                                        <form class=""
                                                              action="{{action('MatchController@destroy', $match->id )}}"
                                                              method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class="btn btn-small btn-link" type="submit">Deletar
                                                            </button>
                                                            <i class="fa fa-trash"></i>
                                                        </form>
                                                    @endcan

                                                    <a href="{{route('bet.create')}}" class="btn btn-small btn-link">Faça
                                                        uma aposta <i
                                                            class="fa fa-money"></i>
                                                    </a>

                                                    <a class="btn btn-small btn-link"
                                                       href="{{ URL::to('match/' . $match->id) }}">Visualizar <i
                                                            class="fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
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
