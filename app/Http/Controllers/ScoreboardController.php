<?php

namespace App\Http\Controllers;

use App\Models\Scoreboard;
use App\Http\Requests\StoreScoreboardRequest;
use App\Http\Requests\UpdateScoreboardRequest;

class ScoreboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|mixed
     */
    public function index()
    {
        return view('scoreboard.index', [
            'scoreboards' => Scoreboard::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScoreboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScoreboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scoreboard  $scoreboard
     * @return \Illuminate\Http\Response
     */
    public function show(Scoreboard $scoreboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scoreboard  $scoreboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Scoreboard $scoreboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScoreboardRequest  $request
     * @param  \App\Models\Scoreboard  $scoreboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScoreboardRequest $request, Scoreboard $scoreboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scoreboard  $scoreboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scoreboard $scoreboard)
    {
        //
    }
}
