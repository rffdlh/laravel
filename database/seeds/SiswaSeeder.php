<?php

use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = new Siswa;
        $siswa->nama = 'Rofi Fadilah';
        $siswa->nis = 'R21022003';
        $siswa->kelas = 'XI RPL3';
        $siswa->jurusan = 'RPL';
        $siswa->alamat = 'Kp.Pasawahan Rt.04 Rw.11';
        $siswa->tgl_lahir = '2003-02-21';
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nama = 'Adnan Maulana';
        $siswa->nis = 'A26012016';
        $siswa->kelas = 'X RPL3';
        $siswa->jurusan = 'RPL';
        $siswa->alamat = 'Kp.Pasawahan Rt.04 Rw.11';
        $siswa->tgl_lahir = '2016-01-26';
        $siswa->save();
    }
}
