<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qna;
use App\SubmisiQna;

class QnaController extends Controller
{
    public function index(){
        $qna = Qna::all();

        return view('qna', ['qna'=>$qna]);
    }

    public function form(){
        $code = NULL;
        return view('qnaform', ['code' => $code]);
    }

    public function formsuccess($code){
        return view('qnaform', ['code' => $code]);
    }

    public function qnasend(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'nohp' => 'required',
            'pertanyaan' => 'required'
        ]);


        SubmisiQna::create([
			'nama' => $request->nama,
            'nohp' => $request->nohp,
            'pertanyaan' =>$request->pertanyaan
        ]);
        
        return redirect('/formlapor/success');
    }
}
