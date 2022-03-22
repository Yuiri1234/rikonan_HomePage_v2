<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberMessage;

class ApplicantController extends Controller
{
    //
    public function index() {
        $member_messages = MemberMessage::all();

        return view('applicant', ['member_messages'=>$member_messages]);
    }
}
