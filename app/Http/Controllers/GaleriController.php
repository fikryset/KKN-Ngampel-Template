<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Video;

class GaleriController extends Controller
{
    public function index(){
        // $galeri = Galeri::orderBy('id','DESC')->paginate(3);
        // $galeri->setPageName('galeri');

        // $video = Video::orderBy('id','DESC')->paginate(2);
        // $video->setPageName('video');

        $galeri = Galeri::orderBy('id','DESC')->paginate(3, ['*'], 'galeri');
        $video = Video::orderBy('id','DESC')->paginate(2, ['*'], 'video');
        
        return view('galeri', ['galeri'=>$galeri,'video'=>$video]);
    }
}
