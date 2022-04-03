<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Prodi;
use App\Models\Category;
use App\Models\Fakultas;
use App\Models\Experience;
use App\Models\Portofolio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\FakultasSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Admin::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('asdfg'),
            'role' => 'admin',
        ]);

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

        $prodi = array(
            array('fakultas_id' => '1', 'nama' => 'Hukum'),
            array('fakultas_id' => '2', 'nama' => 'Manajemen'),
            array('fakultas_id' => '2', 'nama' => 'Ekonomi'),
            array('fakultas_id' => '2', 'nama' => 'Akuntansi'),
            array('fakultas_id' => '2', 'nama' => 'Ekonomi Islam'),
            array('fakultas_id' => '3', 'nama' => 'Administrasi Publik'),
            array('fakultas_id' => '3', 'nama' => 'Administrasi Bisnis'),
            array('fakultas_id' => '3', 'nama' => 'Ilmu Pemerintahan'),
            array('fakultas_id' => '3', 'nama' => 'Ilmu Komunikasi'),
            array('fakultas_id' => '3', 'nama' => 'Hubungan Internasional'),
            array('fakultas_id' => '4', 'nama' => 'Sastra Indonesia'),
            array('fakultas_id' => '4', 'nama' => 'Sastra Inggris'),
            array('fakultas_id' => '4', 'nama' => 'Sejarah'),
            array('fakultas_id' => '4', 'nama' => 'Bahasa dan Kebudayaan Jepang'),
            array('fakultas_id' => '4', 'nama' => 'Antropologi Sosial'),
            array('fakultas_id' => '5', 'nama' => 'Psikologi'),
            array('fakultas_id' => '6', 'nama' => 'Kesehatan Masyarakat'),
            array('fakultas_id' => '7', 'nama' => 'Kedokteran'),
            array('fakultas_id' => '7', 'nama' => 'Keperawatan'),
            array('fakultas_id' => '7', 'nama' => 'Gizi'),
            array('fakultas_id' => '7', 'nama' => 'Farmasi'),
            array('fakultas_id' => '7', 'nama' => 'Kedokteran Gigi'),
            array('fakultas_id' => '8', 'nama' => 'Peternakan'),
            array('fakultas_id' => '8', 'nama' => 'Teknologi Pangan'),
            array('fakultas_id' => '8', 'nama' => 'Agroekoteknologi'),
            array('fakultas_id' => '8', 'nama' => 'Agribisnis'),
            array('fakultas_id' => '9', 'nama' => 'Matematika'),
            array('fakultas_id' => '9', 'nama' => 'Biologi'),
            array('fakultas_id' => '9', 'nama' => 'Kimia'),
            array('fakultas_id' => '9', 'nama' => 'Fisika'),
            array('fakultas_id' => '9', 'nama' => 'Statistika'),
            array('fakultas_id' => '9', 'nama' => 'Informatika'),
            array('fakultas_id' => '9', 'nama' => 'Bioteknologi'),
            array('fakultas_id' => '10', 'nama' => 'Manajemen Sumberdaya Perairan'),
            array('fakultas_id' => '10', 'nama' => 'Akuakultur'),
            array('fakultas_id' => '10', 'nama' => 'Perikanan Tangkap'),
            array('fakultas_id' => '10', 'nama' => 'Ilmu Kelautan'),
            array('fakultas_id' => '10', 'nama' => 'Oseanografi'),
            array('fakultas_id' => '10', 'nama' => 'Teknologi Hasil Perikanan'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Sipil'),
            array('fakultas_id' => '11', 'nama' => 'Arsitektur'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Mesin'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Kimia'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Elektro'),
            array('fakultas_id' => '11', 'nama' => 'Perencanaan Wilayah dan Kota'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Industri'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Lingkungan'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Perkapalan'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Geologi'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Geodesi'),
            array('fakultas_id' => '11', 'nama' => 'Teknik Komputer'),
        );


        foreach ($prodi as $program_studi) {
            Prodi::create([
                'fakultas_id' => $program_studi['fakultas_id'],
                'nama' => $program_studi['nama'],
            ]);
        }
    }
}
