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
        if (!\Gate::allows('isAdmin')) {
            abort(403, "Página não autorizada");
        }

        return view('Match.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!\Gate::allows('isAdmin')) {
            abort(403, "Página não autorizada");
        }
        //
        $matchs = new Matchs;
        $matchs->first_team = $request->first_team;
        $matchs->second_team = $request->second_team;
        $matchs->match_date = $request->match_date;
        $matchs->time_date = $request->time_date;
        $matchs->save();
        return redirect('/match');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $match = Matchs::find($id);
        return view('Match.show')->with('match', $match);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!\Gate::allows('isAdmin')) {
            abort(403, "Página não autorizada");
        }
        //
        $match = Matchs::find($id);
        return view('Match.edit')->with('match', $match);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!\Gate::allows('isAdmin')) {
            abort(403, "Página não autorizada");
        }
        //
        $matchs = Matchs::findOrFail($id);
        $matchs->first_team = $request->first_team;
        $matchs->second_team = $request->second_team;
        $matchs->match_date = $request->match_date;
        $matchs->match_time = $request->match_time;
        $matchs->save();
        return redirect()->action('MatchController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!\Gate::allows('isAdmin')) {
            abort(403, "Página não autorizada");
        }
        //
        $matchs = Matchs::find($id);
        $matchs->delete();
        return redirect()->action('MatchController@index');


    }
}
