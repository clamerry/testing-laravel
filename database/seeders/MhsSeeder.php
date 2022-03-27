<?php

namespace Database\Seeders;

use App\Models\Mhs;
use Illuminate\Database\Seeder;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mhs::factory(5)->create();
    }
}
