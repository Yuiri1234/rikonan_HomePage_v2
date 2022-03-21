<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityPlace;

class ActivityPlaceController extends Controller
{
    //
    public function index() {
        $practice_places = ActivityPlace::where('type', 'practice')->get();
        $game_places = ActivityPlace::where('type', 'game')->get();

        return view('activityPlace', ['practice_places'=>$practice_places, 'game_places'=>$game_places]);
    }
}
