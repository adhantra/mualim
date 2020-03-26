<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surah;

class SurahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surah = Surah::all();
        return view('surah', ['surah' => $surah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surah_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Surah::create([
            'id' => $request->surah_no,
            'nama_arab' => $request->nama_arab,
            'nama_latin' => $request->nama_latin,
            'nama_indonesia' => $request->nama_indonesia,
            'total_ayah' => $request->total_ayah
        ]);
 
        return redirect('/surah');
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
        $surah = Surah::find($id);
        return view('surah_edit', ['surah'=>$surah]);
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
        $surah = Surah::find($id);
        $surah->nama_arab = $request->nama_arab;
        $surah->nama_latin = $request->nama_latin;
        $surah->nama_indonesia = $request->nama_indonesia;
        $surah->total_ayah = $request->total_ayah;
        $surah->save();

        return redirect('/surah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surah = Surah::find($id);
        $surah->delete();
        return redirect('/surah');
    }
}
