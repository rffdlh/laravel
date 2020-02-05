<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    //
    public function pass()
    {
        $nama = "Rofi Fadilah";
        return view('latihan',compact('nama'));
    }
    public function pass1()
    {
        $gaji = 2000000;
        return view('latihan1', ['penghasilan' => $gaji]);
    }
    //pass data parameter
    public function status($status = 'jomblo')
    {
        //dd($status); -> untuk mengecek isi variabelnya
        return view('latihan2', compact('status'));    
    }
    public function loop()
    {
        $buku = [
            ['judul' => 'Bangkit dari Remedial', 'penerbit' =>
            'Erlangga', 'harga' => 100000, 'penulis' => 'Aku yang suka remedin kamu'],
            ['judul' => 'Tips move on dari kamu', 'penerbit' =>
            'Erlangga', 'harga' => 150000, 'penulis' => 'Epul'],
            ['judul' => 'Kekuatan 1/3 malam', 'penerbit' =>
            'Erlangga', 'harga' => 250000, 'penulis' => 'Mutia']
        ];
        return view('latihan3', compact('buku'));
    }
}