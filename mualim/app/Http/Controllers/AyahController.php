<?php

namespace App\Http\Controllers;

use App\Ayah;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AyahController extends Controller
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
        $time = $time->format('H:i');

        $nama = $request->nama;

        // Get Total Ayah
        $total = Ayah::count();

        // Find Based Name
        $find = Ayah::where('text_indonesia', 'LIKE', "%".$nama."%")->get();
        return view('ayah', ['day' => $day, 'time' => $time, 'ayah' => $find, 'total' => $total]);
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
        $time = $time->format('H:i');

        // Get Total Ayah
        $total = Ayah::count();

        // Select All from Ayah
        $ayah = Ayah::all();
        return view('ayah', ['day' => $day, 'time' => $time, 'ayah' => $ayah, 'total' => $total]);
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
        $time = $time->format('H:i');

        return view('ayah_add', ['day' => $day, 'time' => $time]);
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
        Ayah::create([
            'id' => $request->ayah_no,
            'page' => $request->page,
            'juz' => $request->juz,
            'text_arab' => $request->text_arab,
            'text_latin' => $request->text_latin,
            'text_indonesia' => $request->text_indonesia,
            'text_tafsir' => $request->text_tafsir,
            'tags' => $request->tags,
            'surah_no' => $request->surah_no
        ]);
 
        // Back to Surah Page
        return redirect('/ayah');
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
        $time = $time->format('H:i');

        // Find By ID
        $ayah = Ayah::find($id);
        return view('ayah_edit', ['day' => $day, 'time' => $time, 'ayah'=>$ayah]);
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
        $ayah = Ayah::find($id);
        $ayah->page = $request->page;
        $ayah->juz = $request->juz;
        $ayah->text_arab = $request->text_arab;
        $ayah->text_latin = $request->text_latin;
        $ayah->text_indonesia = $request->text_indonesia;
        $ayah->text_tafsir = $request->text_tafsir;
        $ayah->tags = $request->tags;
        $ayah->surah_no = $request->surah_no;
        $ayah->save();

        return redirect('/ayah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ayah = Ayah::find($id);
        $ayah->delete();
        return redirect('/ayah');
    }
}
