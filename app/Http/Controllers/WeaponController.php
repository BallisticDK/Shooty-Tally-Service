<?php

namespace App\Http\Controllers;
use App\Weapon;
class WeaponController extends Controller
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
        return Weapon::all();
    }

    //
}
