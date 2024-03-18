<?php

namespace App\Http\Controllers;

use App\Models\personalinfo;
use Illuminate\Http\Request;

class PersonalinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $personalinfo=Personalinfo::all();
      return view('personalinfo/index-personalinfo', compact('personalinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalinfo/create-personalinfo');
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
            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'linkedin'=>'required',
        ]);
        $personalinfo=Personalinfo::create($data);
        return redirect(url('index-personalinfo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function show(personalinfo $personalinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(personalinfo $personalinfo)
    {
        return view('personalinfo/edit-personalinfo', compact('personalinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personalinfo $personalinfo)
    {
        $data=$request->validate([
            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'linkedin'=>'required',
        ]);
        $personalinfo->update($data);
        return redirect(url('index-personalinfo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(personalinfo $personalinfo)
    {
        $personalinfo->delete();
        return redirect(url('index-personalinfo'));
    }
}
