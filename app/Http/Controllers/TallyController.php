<?php

namespace App\Http\Controllers;

use App\Tally;

class TallyController extends Controller
{
    public function getAll($relations = null)
    {
        return Tally::all();
    }

    public function getOne(int $id, $relations = null)
    {
        return Tally::findOrFail($id);
    }
}
