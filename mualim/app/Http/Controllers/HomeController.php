<?php

namespace App\Http\Controllers;

use App\Surah;
use App\Ayah;
use App\Feedback;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
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

        // Get Total Surah
        $total_surah = Surah::count();
        // Get Total Ayah
        $total_ayah = Ayah::count();
        // Get Total Feedback
        $total_feedback = Feedback::count();

        // Select All from Surah
        $surah = Surah::all();

        // Select All from Feedback
        $feedback = Feedback::paginate(4);

        return view('home', ['day' => $day, 'time' => $time, 'total_surah' => $total_surah, 'total_ayah' => $total_ayah, 'total_feedback' => $total_feedback, 'surah' => $surah, 'feedback' => $feedback]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
