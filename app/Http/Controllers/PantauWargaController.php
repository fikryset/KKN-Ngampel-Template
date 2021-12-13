<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PantauWargaController extends Controller
{
    public function form(){
        $code = NULL;

        return view('formlapor', ['code'=>$code]);
    }

    public function submit(Request $request){
        DB::table('pantau_warga')->insert([
            'pelapor' => $request->namapelapor,
            'nohp' => $request->nohp,
            'terlapor' => $request->namaterlapor,
            'RW' => $request->RW,
            'RT' => $request->RT,
            'lokasi' => $request->lokasi,
            'laporan' => $request->deskripsi
        ]);

        return redirect('/formlapor/success');
    }

    public function formSuccess($code){
        return view('formlapor', ['code' => $code]);
    }
}
