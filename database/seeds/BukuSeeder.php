<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $buku = new Buku;
        $buku->judul = 'Belajar PHP';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah buku tentang PHP';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar laravel';
        $buku->jumlah_halaman = 200;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah buku tentang laravel';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar database';
        $buku->jumlah_halaman = 300;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah buku tentang database';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Dongeng';
        $buku->jumlah_halaman = 400;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah buku dongeng';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Komik';
        $buku->jumlah_halaman = 500;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah buku komik';
        $buku->status = 1;
        $buku->save();
    }
}