<?php

namespace App\Http\Controllers;

use App\Weapon;

class WeaponController extends Controller
{
    public function getAll($relations = null)
    {
        return Weapon::all();
    }

    public function getOne(int $id, $relations = null)
    {
        return Weapon::findOrFail($id);
    }
}
