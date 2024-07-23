<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Tatasengketa;
use App\Models\Tatakeberatan;
use App\Models\Tatapermohonan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create('id_ID');

        Tatapermohonan::create([
            'title'=>'Tata Cara Permohonan Informasi',
            'body'=>$faker->text,
        ]);

        Tatakeberatan::create([
            'title'=>'Tata Cara Pengajuan Keberatan Informasi',
            'body'=>$faker->text,
        ]);

        Tatasengketa::create([
            'title'=>'Tata Cara Sengketa Informasi',
            'body'=>$faker->text,
        ]);
    }
}
