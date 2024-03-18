<?php

namespace App\Http\Controllers;

use App\Models\education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $education=Education::all();
      return view('education/index-education', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education/create-education');
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
            'degree'=>'required',
            'major'=>'required',
            'university'=>'required',
            'date'=>'required',
            
        ]);
        $education=Education::create($data);
        return redirect(url('index-education'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(education $education)
    {
        return view('education/edit-education', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, education $education)
    {
        $data=$request->validate([
            'degree'=>'required',
            'major'=>'required',
            'university'=>'required',
            'date'=>'required',
        ]);
        $education->update($data);
        return redirect(url('index-education'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(education $education)
    {
        $education->delete();
        return redirect(url('index-education'));
    }
}
