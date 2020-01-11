<?php

use App\Peminjam;
use Illuminate\Database\Seeder;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $peminjam = new Peminjam;
        $peminjam->nama = 'Permana';
        $peminjam->jumlah_pinjam = 5;
        $peminjam->tanggal_pinjam = '10-01-2020';
        $peminjam->tanggal_dikembalikan = '17-01-2020';
        $peminjam->save();
    }
}