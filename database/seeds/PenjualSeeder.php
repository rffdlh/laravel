<?php

use App\Penjual;
use Illuminate\Database\Seeder;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $penjual = new Penjual;
        $penjual->barang = 'Buku';
        $penjual->barang_terjual = 2;
        $penjual->tanggal_terjual = '10-01-2020';
        $penjual->harga_terjual = 50000;
        $penjual->synopsis = 'Buku adalah jendela dunia ...';
        $penjual->save();
    }
}