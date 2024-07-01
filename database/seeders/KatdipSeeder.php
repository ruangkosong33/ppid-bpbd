<?php

namespace Database\Seeders;

use App\Models\Katdip;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KatdipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = ['Informasi Serta Merta', 'Informasi Berkala', 'Informasi Setiap Saat', 'Informasi Di Kecualikan'];

        foreach($array as $k => $arr) {
            Katdip::create([
                'title' => $arr,
            ]);
        }
    }
}
