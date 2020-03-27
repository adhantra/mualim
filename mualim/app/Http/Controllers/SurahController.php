<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Surah;

class SurahController extends Controller
{
    /**
     *
     * Search
     * 
     */
    public function find(Request $request)
    {
        // Get Name of Day and Day
        $day = Carbon::now()->format('l, d');

        // Get Hours and Minutes
        $time = Carbon::now();
        $time->timezone('Asia/Jakarta');
        $time = $time->format('h:i');

        $nama = $request->nama;

        // Get Total Surah
        $total = Surah::count();

        // Find Based Name
        $find = Surah::where('nama_latin', 'LIKE', "%".$nama."%")->get();
        return view('surah', ['day' => $day, 'time' => $time, 'surah' => $find, 'total' => $total]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Name of Day and Day
        $day = Carbon::now()->format('l, d');

        // Get Hours and Minutes
        $time = Carbon::now();
        $time->timezone('Asia/Jakarta');
        $time = $time->format('h:i');

        // Get Total Surah
        $total = Surah::count();

        // Select All from Surah
        $surah = Surah::all();
        return view('surah', ['day' => $day, 'time' => $time, 'surah' => $surah, 'total' => $total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get Name of Day and Day
        $day = Carbon::now()->format('l, d');

        // Get Hours and Minutes
        $time = Carbon::now();
        $time->timezone('Asia/Jakarta');
        $time = $time->format('h:i');

        // Return to View Surah Add Page
        return view('surah_add', ['day' => $day, 'time' => $time]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Add Into Database
        Surah::create([
            'id' => $request->surah_no,
            'nama_arab' => $request->nama_arab,
            'nama_latin' => $request->nama_latin,
            'nama_indonesia' => $request->nama_indonesia,
            'total_ayah' => $request->total_ayah
        ]);
 
        // Back to Surah Page
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
        // Get Name of Day and Day
        $day = Carbon::now()->format('l, d');

        // Get Hours and Minutes
        $time = Carbon::now();
        $time->timezone('Asia/Jakarta');
        $time = $time->format('h:i');

        // Find By ID
        $surah = Surah::find($id);
        return view('surah_edit', ['day' => $day, 'time' => $time, 'surah'=>$surah]);
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
