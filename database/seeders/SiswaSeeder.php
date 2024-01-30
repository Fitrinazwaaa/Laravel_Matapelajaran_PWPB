<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nis' => '2223101266',
            'nisn' => '0192834746',
            'nama' => 'Fitri Njwa',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 'perempuan',
            'alamat' => 'Kawali-Ciamis',
            'no_hp' => '082115478426'
        ]);
    }
}
