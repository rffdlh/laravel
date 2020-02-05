<?php

use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gaji = new Gaji;
        $gaji->nip = '21022003';
        $gaji->nama = 'Rofi Fadilah';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = "Kp.Pasawahan";
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja = 9;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = '26012016';
        $gaji->nama = 'Adnan Maulana';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = "Kp.Pasawahan";
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = 7;
        $gaji->save();
    }
}