<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameScore;

class PracticeGameController extends Controller
{
    //
    public function index() {
        $games = GameScore::where('type', 'practice')->get();

        return view('practiceGame', ['games'=>$games]);
    }

    public function show($game) {
        return view('showGame', ['game'=>$game]);
    }
}
