<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youtube;

class MoviesController extends Controller
{
    //
    public function index() {
        $youtubes = Youtube::all();

        return view('movies', ['youtubes'=>$youtubes]);
    }
}
