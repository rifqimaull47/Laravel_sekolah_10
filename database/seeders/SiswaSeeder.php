<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::create([
            'nama' => 'Rifqi',
            'kelas' => 'XII RPL 3',
        ]);

        Siswa::create([
            'nama' => 'Zaina',
            'kelas' => 'XII RPL 3',
        ]);

        Siswa::create([
            'nama' => 'Aqila',
            'kelas' => 'XII RPL 3',
        ]);
    }
}