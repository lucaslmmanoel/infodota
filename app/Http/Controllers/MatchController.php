<?php

namespace InfoDota\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Access\Gate as Gate;
use InfoDota\Matchs;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchs = Matchs::all();
        return view('Match.index', compact('matchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!\Gate::allows('isAdmin')){
            abort(403, "Página não autorizada");
        }

        return view('Match.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $matchs = new Matchs;
        $matchs->first_team =$request->first_team;
        $matchs->second_team =$request->second_team;
        $matchs->match_date =$request->match_date;
        $matchs->match_time =$request->match_time;
        $matchs->save();
        return redirect()->route('Match.index')->with('message', 'Partida agendada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $matchs = Matchs::findOrFail($id);
        return view('Matchs.edit', compact('matchs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $matchs = Matchs::findOrFail($id);
        $matchs->first_team =$request->first_team;
        $matchs->second_team =$request->second_team;
        $matchs->match_date =$request->match_date;
        $matchs->match_time =$request->match_time;
        $matchs->save();
        return redirect()->route('Match.index')->with('message', 'Partida Atualizada');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $matchs = Matchs::findOrFail($id);
        $matchs->delete();
        return redirect()->route('Matchs.index')->with('alert-success', 'Partida desmarcada');

    }
}
