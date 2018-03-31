<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function getAll($relations = null)
    {
        return User::all();
    }

    public function getOne(int $id, $relations = null)
    {
        return User::findOrFail($id);
    }
}
