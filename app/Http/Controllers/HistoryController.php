<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $questions = Auth::user()->questions()->latest()->get();
        $answers = Auth::user()->answers()->latest()->get();
        return view('history',compact('questions','answers'));
    }
}
