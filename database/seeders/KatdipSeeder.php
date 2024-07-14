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
        $data = [
            [
                'title' => 'Informasi Serta Merta',
                'body' => 'Informasi yang dapat mengancam hajat hidup orang banyak dan ketertiban umum.',
            ],
            [
                'title' => 'Informasi Berkala',
                'body' => 'Merupakan Informasi Yang Wajib Disediakan Dan Diumumkan Secara Berkala.',
            ],
            [
                'title' => 'Informasi Setiap Saat',
                'body' => 'Informasi Yang Wajib Disediakan Badan Publik.',
            ],
            [
                'title' => 'Informasi Di Kecualikan',
                'body' => 'Informasi Yang Tidak Dapat Diakses Oleh Pemohon Informasi Publik.',
            ],
        ];

        foreach ($data as $item) {
            Katdip::create($item);
        }
    }

}
