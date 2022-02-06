<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Portofolio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Clamerry',
            'username' => 'clamerry',
            'role' => 'admin',
            'email' => 'isengaja114@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        
        User::create([
            'name' => 'WhyNot',
            'username' => 'kaizen',
            'role' => 'mahasiswa',
            'email' => 'kaizen@gmail.com',
            'password' => bcrypt('abcde')
        ]);
        
        User::factory(3)->create();
        
        Category::create([
            'name' => 'Mobile',
            'slug' => 'mobile'
        ]);

        Category::create([
            'name' => 'Web',
            'slug' => 'web'
        ]);

        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);

        Portofolio::factory(20)->create();

        Experience::factory(5)->create();
        
    }
}
