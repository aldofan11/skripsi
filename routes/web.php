<?php

use App\Http\Controllers\Admin\DashboardController;
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
    return view('index');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/tentangdesa', function () {
    return view('tentangdesa');
});

Route::get('/informasidesa', function () {
    return view('informasidesa');
});

Route::get('/aparatur', function () {
    return view('aparatur');
});

Route::get('/sejarahdesa', function () {
    return view('sejarahdesa');
});

Route::get('/informasikependudukan', function () {
    return view('informasikependudukan');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/visimisidesa', function () {
    return view('visimisi');
});

Route::get('/data pendidikan', function () {
    return view('datapendidikan');
});

Route::get('/data agama', function () {
    return view('dataagama');
});

Route::get('/data gender', function () {
    return view('datagender');
});

Route::group(['middleware'=>['auth'], 'prefix'=> 'dashboard'], function(){
    Route::get('/', [DashboardController::class, 'index']);
});