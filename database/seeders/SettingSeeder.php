<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'address'=>'Jl. MT. Haryono, Air Putih, Kec. Samarinda Ulu 75123',
            'email'=>'bpbd@kaltimprov.go.id',
            'phone'=>'741040',
        ]);
    }
}
