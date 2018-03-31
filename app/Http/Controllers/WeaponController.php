<?php

namespace App\Http\Controllers;

use App\Weapon;

class WeaponController extends Controller
{
    public function getAll()
    {
        return Weapon::all();
    }

    public function getOne(int $id)
    {
        return Weapon::findOrFail($id);
    }
}
