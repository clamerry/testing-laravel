<?php

namespace Fakultas\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Fakultas::create([
            'nama' => 'Fakultas Hukum'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Ekonomika dan Bisnis'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Ilmu Sosial dan Ilmu Politik'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Ilmu Budaya'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Psikologi'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Kesehatan Masyarakat'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Kedokteran'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Peternakan dan Pertanian'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Sains dan Matematika'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Perikanan dan Ilmu Kelautan'
        ]);
        Fakultas::create([
            'nama' => 'Fakultas Teknik'
        ]);
        
    }
}
