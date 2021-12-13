<?php

use App\Http\Controllers\TestControllerArtisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/formlapor','PantauWargaController@form');
Route::post('/submitlapor','PantauWargaController@submit');
Route::get('/formlapor/{code}', 'PantauWargaController@formSuccess');

Route::get('/galeri','GaleriController@index');

Route::get('/qna','QnaController@index');
Route::get('/qnaform','QnaController@form');
Route::get('/qnaform/{code}', 'QnaController@formsuccess');
Route::post('/submitqna','QnaController@qnasend');

Route::get('/admin/laporan', 'AdminController@lapor');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/loginpost', 'AdminController@loginPost');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin/upload', 'AdminController@upload');
Route::post('admin/uploadpost', 'AdminController@uploadPost');
Route::post('admin/uploadpostvid', 'AdminController@uploadPostVid');
