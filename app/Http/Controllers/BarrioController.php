<?php

namespace App\Http\Controllers;
use App\Models\Barrio;

use Illuminate\Http\Request;

class BarrioController extends Controller
{
    public function index()
    {
        $barrios = Barrio::all();

        return view('barrio.index')->with('barrios', $barrios);
    }

}
