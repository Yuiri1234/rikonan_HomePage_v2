<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderImage;
use App\Models\AnnualSchedule;

class IndexController extends Controller
{
    //
    public function index() {
        $slider_images = SliderImage::all();
        $annual_schedules = AnnualSchedule::all();

        return view('index', ['slider_images'=>$slider_images, 'annual_schedules'=>$annual_schedules]);
    }
}
