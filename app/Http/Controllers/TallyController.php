<?php

namespace App\Http\Controllers;

use App\Tally;

class TallyController extends Controller
{
    public function getAll()
    {
        return Tally::all();
    }

    public function getOne(int $id)
    {
        return Tally::findOrFail($id);
    }
}
