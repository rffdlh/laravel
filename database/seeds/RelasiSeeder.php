<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Wali;
use App\Mahasiswa;
use App\Hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        # Membuat data dosen
        $dosen = Dosen::create(array(
            'nama' => 'Abdul Mustofa',
            'nipd' => '1234567890'
        ));
        $this->command->info('Data Dosen telah diisi');

        # Menbuat data mahasiswa
        $rofi = Mahasiswa::create(array(
            'nama' => 'Rofi',
            'nim' => '21022003',
            'id_dosen' => $dosen->id
        ));

        $adnan = Mahasiswa::create(array(
            'nama' => 'Adnan',
            'nim' => '26012016',
            'id_dosen' => $dosen->id
        ));

        $hlm = Mahasiswa::create(array(
            'nama' => 'Hilman',
            'nim' => '17062002',
            'id_dosen' => $dosen->id
        ));
        $this->command->info('Data Mahasiswa telah diisi');

        # Membuat wali si Rofi
        Wali::create(array(
            'nama' => 'Rofi Fadilah',
            'id_mahasiswa' => $rofi->id
        ));

        # Membuat wali si Adnan
        Wali::create(array(
            'nama' => 'Adnan Maulana',
            'id_mahasiswa' => $adnan->id
        ));

        # Membuat wali si Hlm
        Wali::create(array(
            'nama' => 'Hilman Permana',
            'id_mahasiswa' => $hlm->id
        ));

        # Informasi ketika semua wali telah diisi
        $this->command->info('Data Mahasiswa dan Wali telah diisi');

        # Membuat data tabel hobi
        $mandi_hujan = Hobi::create(array(
            'hobi' => 'Mandi Hujan'
        ));
        $baca_buku = Hobi::create(array(
            'hobi' => 'Baca Buku'
        ));

        $rofi->hobi()->attach($mandi_hujan->id);
        $rofi->hobi()->attach($baca_buku->id);
        $adnan->hobi()->attach($mandi_hujan->id);
        $hlm->hobi()->attach($baca_buku->id);
        $this->command->info('Data Mahasiswa dan Hobi telah diisi');

        // attach -> menampilkan banyak data
        // sync -> untuk mengupdate data
    }
}