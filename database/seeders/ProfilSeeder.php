<?php

namespace Database\Seeders;

use App\Models\Etik;
use App\Models\Visi;
use App\Models\Dasar;
use App\Models\Waktu;
use App\Models\Fungsi;
use App\Models\Standar;
use App\Models\Definisi;
use App\Models\Maklumat;
use App\Models\Struktur;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create('id_ID');

        Struktur::create([
            'title'=>'Struktur Organisasi',
            'body'=>$faker->text,
        ]);

        Visi::create([
            'title'=>'Visi & Misi',
            'body'=>$faker->text,
        ]);

        Fungsi::create([
            'title'=>'Tugas Pokok & Fungsi',
            'body'=>$faker->text,
        ]);

        Maklumat::create([
            'title'=>'Maklumat Pelayanan',
            'body'=>$faker->text,
        ]);

        Dasar::create([
            'title'=>'Dasar Hukum',
            'body'=>$faker->text,
        ]);

        Standar::create([
            'title'=>'Standar Pelayanan',
            'body'=>$faker->text,
        ]);

        Etik::create([
            'title'=>'Kode Etik',
            'body'=>$faker->text,
        ]);

        Definisi::create([
            'title'=>'Definisi Informasi Publik',
            'body'=>$faker->text,
        ]);
    }
}
