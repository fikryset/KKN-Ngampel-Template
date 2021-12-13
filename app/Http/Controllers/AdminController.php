<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Laporan;
use App\ModelUser;
use App\Galeri;
use App\Video;

class AdminController extends Controller
{
    public function login(){
        return view('adminlogin');
    }


    public function index(){
        if(!Session::get('loginstatus')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('adminhome');
        }
    }


    public function lapor(){
        if(!Session::get('loginstatus')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            $laporan = Laporan::orderBy('id','DESC')->get();
    
            return view('adminlapor', ['laporan' => $laporan]);
        }
    }

    public function upload(){
        return view('adminupload');
    }

    public function uploadPost(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'file_storage';
        $file->move($tujuan_upload,$nama_file);
 
		Galeri::create([
			'file' => $nama_file,
            'judul' => $request->judul,
            'deskripsi' =>$request->deskripsi
		]);
 
		return redirect()->back();
    }

    public function uploadPostVid(Request $request){
        $this->validate($request, [
            'linkv' => 'required',
            'judulv' => 'required',
            'deskripsiv' => 'required'
        ]);

		Video::create([
			'link' => $request->linkv,
            'judul' => $request->judulv,
            'deskripsi' =>$request->deskripsiv
		]);
 
		return redirect()->back();
    }


    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if($password == $data->password){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('loginstatus',TRUE);
                return redirect('admin');
            }
            else{
                return redirect('admin/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('admin/login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/home')->with('alert','Kamu sudah logout');
    }
}
