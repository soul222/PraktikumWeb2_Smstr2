<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\TesPemeriksaan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Form');
});

Route::post('/proses-tes', function (Request $request) {
    // Proses data form
    $nama = $request->input('nama');
    $tanggal_pemeriksaan = $request->input('tanggal_pemeriksaan');
    $usia = $request->input('usia');
    $jenis_kelamin = $request->input('jenis_kelamin');

    // Simpan data ke dalam tabel menggunakan model
    $tesPemeriksaan = new TesPemeriksaan;
    $tesPemeriksaan->nama = $nama;
    $tesPemeriksaan->tanggal_pemeriksaan = $tanggal_pemeriksaan;
    $tesPemeriksaan->usia = $usia;
    $tesPemeriksaan->jenis_kelamin = $jenis_kelamin;
    $tesPemeriksaan->save();

    // Redirect ke halaman sukses atau halaman lainnya
    return redirect('/Hasil')->with('success', 'Data tes pemeriksaan berhasil diproses!');
});

Route::get('/Hasil', function () {
    $tesPemeriksaan = TesPemeriksaan::get();
    return view('Hasil', ['tesPemeriksaan' => $tesPemeriksaan]);
});