<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $skills=Skills::all();
      return view('skills/index-skills', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills/create-skills');
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
            'skill1'=>'required',
            'skill2'=>'required',
            
            
        ]);
        $skills=Skills::create($data);
        return redirect(url('index-skills'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(skills $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit(skills $skills)
    {
        return view('skills/edit-skills', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, skills $skills)
    {
        $data=$request->validate([
            'skill1'=>'required',
            'skill2'=>'required',
        ]);
        $skills->update($data);
        return redirect(url('index-skills'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy(skills $skills)
    {
        $skills->delete();
        return redirect(url('index-skills'));
    }
}
