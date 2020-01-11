<?php

use App\Pembuat;
use Illuminate\Database\Seeder;

class PembuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembuat = new Pembuat;
        $pembuat->judul = 'Mariposa';
        $pembuat->jumlah_halaman = 340;
        $pembuat->synopsis = 'Tentang dia yang ...';
        $pembuat->tanggal_pembuat = '18-08-2014';
        $pembuat->tanggal_penerbit = '29-12-2015';
        $pembuat->save();
    }
}