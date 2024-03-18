<?php

namespace App\Http\Controllers;

use App\Models\work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $work=Work::all();
      return view('work/index-work', compact('work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/work');
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
            'title'=>'required',
            'company'=>'required',
            'description'=>'required',
            
            
        ]);
        $work=Work::create($data);
        return redirect(url('index-work'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {
        return view('work/edit-work', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, work $work)
    {
        $data=$request->validate([
            'title'=>'required',
            'company'=>'required',
            'description'=>'required',
        ]);
        $work->update($data);
        return redirect(url('index-work'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(work $work)
    {
        $work->delete();
        return redirect(url('index-work'));
    }
}
