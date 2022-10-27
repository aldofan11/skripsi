<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AparaturController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\KependudukanController;
use App\Http\Controllers\Admin\MembuatdokumenController;
use App\Models\Aparat;
use App\Models\Galery;
use App\Models\Information;
use App\Models\News;
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
    $galeries = Galery::orderBy('created_at', 'desc')->limit(3)->get();
    $news = News::orderBy('created_at', 'desc')->limit(3)->get();
    $kep = Aparat::where('position', 'kepala_desa')->first();
    $wak_kep = Aparat::where('position', 'wakil_kepala_desa')->first();
    $sek = Aparat::where('position', 'sekretaris')->first();
    return view('index', compact('galeries', 'kep', 'wak_kep', 'sek', 'news'));
});

Route::get('/galeri', function () {
    $galeries = Galery::orderBy('created_at', 'desc')->get();
    return view('galeri', compact('galeries'));
});

Route::get('/berita', function () {
    $news = News::orderBy('created_at', 'desc')->get();

    return view('berita', compact('news'));
});

Route::get('/tentangdesa', function () {
    return view('tentangdesa');
});

Route::get('/informasidesa', function () {
    $informations = Information::orderBy('created_at', 'desc')->get();
    return view('informasidesa', compact('informations'));
});

Route::get('/aparatur', function () {
    $kep = Aparat::where('position', 'kepala_desa')->first();
    $aparats = Aparat::where('position','!=', 'kepala_desa')->get();
    return view('aparatur', compact('kep', 'aparats'));
});

Route::get('/sejarahdesa', function () {
    return view('sejarahdesa');
});

Route::get('/data gender', function () {
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

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('aparatur', AparaturController::class);
    Route::get('/getjabatan', [AparaturController::class, 'getJabatan'])->name('getjabatan');
    Route::resource('berita', BeritaController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('kependudukan', KependudukanController::class);
    Route::resource('dokumen', InformationController::class);
});
