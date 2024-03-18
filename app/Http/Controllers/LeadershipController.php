<?php

namespace App\Http\Controllers;

use App\Models\leadership;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $leadership=Leadership::all();
      return view('leadership/index-leadership', compact('leadership'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leadership/create-leadership');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'activity1'=>'required',
            'activity2'=>'required',
            
            
        ]);
        $leadership=leadership::create($data);
        return redirect(url('index-leadership'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function show(leadership $leadership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function edit(leadership $leadership)
    {
        return view('leadership/edit-leadership', compact('leadership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, leadership $leadership)
    {
        $data=$request->validate([
            'activity1'=>'required',
            'activity2'=>'required',
        ]);
        $leadership->update($data);
        return redirect(url('index-leadership'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function destroy(leadership $leadership)
    {
        $leadership->delete();
        return redirect(url('index-leadership'));
    }
}
