<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FeedbackController extends Controller
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

        $title = $request->title;

        // Get Total Feedback
        $total = Feedback::count();

        // Find Based Name
        $find = Feedback::where('title', 'LIKE', "%".$title."%")->get();
        return view('feedback', ['day' => $day, 'time' => $time, 'feedback' => $find, 'total' => $total]);
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

        // Get Total Feedback
        $total = Feedback::count();

        // Select All from Feedback
        $feedback = Feedback::all();
        return view('feedback', ['day' => $day, 'time' => $time, 'feedback' => $feedback, 'total' => $total]);
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
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect('/feedback');
    }
}
