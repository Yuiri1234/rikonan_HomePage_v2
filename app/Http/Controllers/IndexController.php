<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderImage;

class IndexController extends Controller
{
    //
    public function index() {
        $slider_images = SliderImage::all();

        return view('index', ['slider_images'=>$slider_images]);
    }
}
