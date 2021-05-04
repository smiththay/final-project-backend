<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Goal::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $goal = new Goal();
        $goal->title = $request->title;
        $goal->description = $request->description;
        $goal->progress = $request->progress;
        $goal->total = $request->total;
        $goal->community_vis = $request->community_vis;


        $goal->save();
        return $goal;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Goal::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $goal = Goal::find($id);
        $goal->title = $request->title;
        $goal->description = $request->description;
        $goal->progress = $request->progress;
        $goal->total = $request->total;

        $goal->save(); //U
        return $goal;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        Goal::destroy($id);
        return "destroyed ID" . $id;
    }
}
