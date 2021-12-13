<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Video;
use App\Covid;

class HomeController extends Controller
{
    public function index(){
        $poster = Galeri::orderBy('id','DESC')->first();
        $video = Video::orderBy('id','DESC')->first();
        $covid = Covid::orderBy('id','DESC')->first();


        return view('home', ['poster'=>$poster, 'video'=>$video, 'covid'=>$covid]);
    }
}
