<?php

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

use App\Buku;
use App\Pembeli;
use App\Penjual;
use App\peminjam;
use App\Pembuat;
Route::get('/', function () {
    return Buku::all();
});

Route::get('contoh', 'ContohController@latihan1');

Route::get('profil1', 'ContohController@latihan2');

Route::get('profil2', 'ContohController@latihan3');

Route::get('profil3', 'ContohController@latihan4');

Route::get('biodata', 'ContohController@biodata');

//menggunakan optional
Route::get('pesan/{makan?}/{minum?}/{harga?}', 'ContohController@pesanan');

//CRUD buku
Route::get('get-buku', 'BukuController@index');
Route::get('create-buku', 'BukuController@buatdata');
Route::get('get-buku/{id}', 'BukuController@show');
Route::get('delete-buku/{id}', 'BukuController@delete');
Route::get('update-buku/{id}', 'BukuController@update');

Route::get('hitung-buku', 'BukuController@hitungbuku');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('psn', function () {
    return 'ini pesan dari saya';
});

Route::get('laravel', function () {
    return 'pertama belajar laravel';
});

Route::get('komentar', function () {
    return 'komentar apa aja weh';
});

Route::get('belajar', function () {
    return 'belajar itu penting';
});

Route::get('variable', function () {
    $data1 = 'ini variable data 1';
    $data2 = 'ini variable data 2';
    $data3 = 'ini variable data 3';
    $data4 = 'ini variable data 4';
    $data5 = 'ini variable data 5';
    return $data1 ."<br>". $data2 ."<br>". $data3 ."<br>". $data4 ."<br>". $data5;
});

Route::get('angkot/jurusan', function () {
    $jurusan1 = 'cibaduyut - karang setra';
    $jurusan2 = 'katapang - cibaduyut';
    $jurusan3 = 'cicukang - sayati';
    $data = 'angkot jurusan';
    return $data .''. $jurusan1 ."<br>". $data .''. $jurusan2 ."<br>". $data .''. $jurusan3;
});

//optional parameter
Route::get('user/{nama}/{alamat}/{nomor}', function ($nama, $alamat, $nomor) {
    return 'halo ' .$nama. ' yang beralamat di ' .$alamat. ' nomor ' .$nomor;
});

Route::get('user/{nama}/{nilai}', function ($nama, $nilai) {
    if ($nilai <= 100 && $nilai >= 50) {
        echo "A<br>";
    }
    elseif ($nilai <= 50 && $nilai >= 40) {
        echo "B<br>";
    }
    elseif ($nilai <= 40 && $nilai >= 30) {
        echo "C<br>";
    }
    elseif ($nilai <= 30 && $nilai >= 1) {
        echo "D<br>";
    }
    return ' nama : ' .$nama.' <br> nilai : ' .$nilai;
});