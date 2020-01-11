<?php

use App\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembeli = new Pembeli;
        $pembeli->jumlah_barang = 10;
        $pembeli->judul = 'Shampo Dove';
        $pembeli->synopsis = 'Anti rambut rontok';
        $pembeli->tanggal_pembelian = '10-01-2020';
        $pembeli->harga = 10000;
        $pembeli->save();
    }
}