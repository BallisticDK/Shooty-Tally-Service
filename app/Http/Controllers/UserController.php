<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function getAll()
    {
        return User::all();
    }

    public function getOne(int $id)
    {
        return User::findOrFail($id);
    }
}
