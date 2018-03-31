<?php

namespace App\Http\Controllers;
use App\Tally;
class TallyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show()
    {
        return Tally::all();
    }

    public function showjoin()
    {
        return Tally::with('weapon')->with('user')->get();
    }

    //
}
