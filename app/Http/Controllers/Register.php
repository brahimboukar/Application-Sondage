<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function register()
    {
        $regionData = Region::all();
        return view("Auth/register", ['data' => $regionData]);
    }
}
