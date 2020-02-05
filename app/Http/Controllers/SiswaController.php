<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function index() {
        $siswa = Siswa::all();
        return $siswa;
    }
    public function show($id) {
        $siswa = Siswa::find($id);
        return $siswa;
    }
    public function buatdata() {
        $siswa = Siswa::find(2);
        $siswa = new Siswa;
        $siswa->nama = "Hilman Permana";
        $siswa->nis = "H17062002";
        $siswa->kelas = "XI RPL3";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "KP.Pasawahan Rt.03 Rw.11";
        $siswa->tgl_lahir = "2002-06-17";
        $siswa->save();
        return $siswa;
    }
    public function update($id, $nama, $nis, $tgl_lahir) {
        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->nis = $nis;
        $siswa->kelas = "XI RPL3";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "KP.Pasawahan Rt.04 Rw.11";
        $siswa->tgl_lahir = $tgl_lahir;
        $siswa->save();
        return $siswa;
    }
    public function delete($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }
}
