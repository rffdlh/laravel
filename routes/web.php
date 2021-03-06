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
use App\Gaji;
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1', function() {
    # Temukan mahasiswa dengan nim 21022003
    $mahasiswa = Mahasiswa::where('nim', '=', '21022003')->first();
    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
    // first() -> 1 data yang diambil => get() -> banyak data yang diambil
});
Route::get('relasi-2', function() {
    # Mencari data mahasiswa dengan nim 21022003
    $mahasiswa = Mahasiswa::where('nim', '=', '21022003')->first();
    # Menampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;
});
Route::get('relasi-3', function() {
    # Mencari data dosen yang bernama Adnan
    $dosen = Dosen::where('nama', '=', 'Abdul Mustofa')->first();
    # Tampilkan seluruh data mahasiswa didiknya
    foreach ($dosen->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama .
        '<strong> ' . $temp->nim . '</strong></li>';
    }
});
Route::get('relasi-4', function() {
    # Mencari data mahasiswa yang bernama Rofi
    $rofi = Mahasiswa::where('nama', '=', 'Rofi')->first();
    # Menampilkan seluruh hobi si Rofi
    foreach ($rofi->hobi as $temp) {
        echo '<li>' . $temp->hobi . '</li>';
    }
});
Route::get('relasi-5', function() {
    # Mancari data hobi yang bernama Mandi Hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();
    # Menampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama .
        '<strong> ' . $temp->nim . '</strong></li>';
    }
});
Route::get('eloquent', function () {
    $data = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
    return view('eloquent', compact('data'));
});

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
Route::get('update-buku/{id}/{judul}', 'BukuController@update');

Route::get('hitung-buku', 'BukuController@hitungbuku');

//CRUD siswa
Route::get('get-siswa', 'SiswaController@index');
Route::get('create-siswa', 'SiswaController@buatdata');
Route::get('get-siswa/{id}', 'SiswaController@show');
Route::get('delete-siswa/{id}', 'SiswaController@delete');
Route::get('update-siswa/{id}/{nama}/{nis}/{tgl_lahir}', 'SiswaController@update');

//Passing data
Route::get('pass', 'PracticeController@pass');
Route::get('pass1', 'PracticeController@pass1');
Route::get('status/{a?}', 'PracticeController@status');
Route::get('buku', 'PracticeController@loop');

//Book
Route::get('book', 'BukuController@index');
Route::get('book/{id}', 'BukuController@show');

//Gaji
Route::get('gajih', 'GajiController@indexgaji');
Route::get('gajih/{id}', 'GajiController@showgaji');

//Belajar Blade Templating
Route::get('/profil', function() { //nama url
    return view('profil'); //nama view
});
Route::get('/kontak', function() {
    return view('kontak');
});
Route::get('/blog', function() {
    return view('blog');
});

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