<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    //
    public function latihan1() {
        return 'Ini contoh Controller';
    }
    public function latihan2() {
        $a = 'Rofi';
        $b = 'Fadilah';

        return 'Nama saya adalah '.$a.' '.$b;
    }
    //Passing data from controller to view
    public function latihan3() {
        $a = "Hilman Permana";
        return view('test', compact('a'));
    }
    public function latihan4() {
        $a = "Adnan Maulana";
        return view('test2',['nama' => $a]);
    }
    public function biodata() {
        $a = "Rofi Fadilah";
        $b = "Islam";
        $c = "Perempuan";
        $d = "Kp. Pasawahan Rt.04 Rw.11";
        $e = "SMK Assalaam Bandung";
        $f = "XI RPL3";
        $g = "Rekayasa Perangkat Lunak";
        $h = "Membaca";
        $i = "16 tahun";
        return view('biodata', ['nama' => $a, 'agama' => $b,
        'jenis_kelamin' => $c, 'alamat' => $d, 'sekolah' => $e,
        'kelas' => $f, 'jurusan' => $g, 'hobi' => $h, 'umur' => $i]);
        //return view('biodata', compact('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'));
    }
    public function pesanan($a = null, $b = null, $c = null) {
        if (isset($a)) {
            $a = "Anda memesan $a";
        }
        if (isset($b)) {
            $b = "& $b";
        }
        if (isset($c)) {
            if (($c) >= 25000) {
                $c = "Mendapatkan ukuran jumbo";
            }
            elseif (($c) <= 25000 && ($c) >= 15000) {
                $c = "Mendapatkan ukuran medium";
            }
            elseif (($c) <= 15000 && ($c) >= 1) {
                $c = "Mendapatkan ukuran small";
            }
            else {
                $c = "Harga anda tidak valid";
            }
        }
        if (!isset($a)) {
            $a = "Anda belum memesan sesuatu";
        }
        return view('pesan', compact('a', 'b', 'c'));
    }
}