<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    //
    public function index() {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));//compact untuk menampung suatu nilai
    }
    public function show($id) {
        $buku = Buku::find($id);
        return view('buku.show', compact('buku'));
    }
    public function hitungbuku() {
        $buku = Buku::count();
        return $buku;
    }
    public function buatdata() {
        $buku = Buku::find(2);
        $buku = new Buku;
        $buku->judul = "Belajar mengamalkan";
        $buku->jumlah_halaman = 222;
        $buku->penerbit = "Gramedia";
        $buku->synopsis = "Mengamalkan hal-hal yang baik";
        $buku->status = true;
        $buku->save();
        return $buku;
    }
    public function update($id, $judul) {
        $buku = Buku::find($id);
        $buku->judul = $judul;
        $buku->jumlah_halaman = 1000;
        $buku->penerbit = "CV lorem ipsum";
        $buku->synopsis = "Lorem ipsum";
        $buku->status = false;
        $buku->save();
        return $buku;
    }
    public function delete($id) {
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
}