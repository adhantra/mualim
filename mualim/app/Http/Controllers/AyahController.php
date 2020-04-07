<?php

namespace App\Http\Controllers;

use App\Ayah;
use App\Surah;
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
    /*public function index()
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
    }*/

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
            'ayah_no' => $request->ayah_no,
            'page' => $request->page,
            'juz' => $request->juz,
            'text_arab' => $request->text_arab,
            'text_latin' => $request->text_latin,
            'text_indonesia' => $request->text_indonesia,
            'text_tafsir' => $request->text_tafsir,
            'tags' => $request->tags,
            'surah_id' => $request->surah_no
        ]);
 
        // Back to Surah Page
        return redirect()->action(
            'AyahController@show', ['id' => $request->surah_no]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Name of Day and Day
        $day = Carbon::now()->format('l, d');

        // Get Hours and Minutes
        $time = Carbon::now();
        $time->timezone('Asia/Jakarta');
        $time = $time->format('H:i');

        // Get Total Ayah
        $total = Ayah::where('surah_id', $id)->count();

        // Select Ayah based on Surah ID
        $ayah = Ayah::where('surah_id', $id)->get();
        $surah_name = Surah::where('id', $id)->pluck('nama_latin')->first();
        return view('ayah', ['day' => $day, 'time' => $time, 'surah_name' => $surah_name, 'ayah' => $ayah, 'total' => $total]);
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
        $ayah->ayah_no = $request->ayah_no;
        $ayah->page = $request->page;
        $ayah->juz = $request->juz;
        $ayah->text_arab = $request->text_arab;
        $ayah->text_latin = $request->text_latin;
        $ayah->text_indonesia = $request->text_indonesia;
        $ayah->text_tafsir = $request->text_tafsir;
        $ayah->tags = $request->tags;
        $ayah->surah_id = $request->surah_no;
        $ayah->save();

        // Back to Surah Page
        return redirect()->action(
            'AyahController@show', ['id' => $request->surah_no]
        );
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
        return redirect()->back();
    }
}
