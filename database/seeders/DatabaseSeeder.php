<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
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
        //     'title' => 'Aplikasi 1',
        //     'slug' => 'aplikasi-1',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, minima!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis accusamus id ipsa sit nesciunt dolor, corporis aperiam veritatis eos consequuntur neque quam odio tempore itaque quos minima ea enim, ducimus quidem incidunt quasi expedita rerum ipsam. Magnam ipsum ducimus nesciunt unde impedit illum debitis, soluta dolor? distinctio repellat eum maiores numquam maxime suscipit nulla voluptatibus sunt molestiae sapiente ipsam enim, quae laudantium nihil ducimus consectetur fugiat deleniti corrupti aliquam veritatis. Unde similique minima iure! Fugiat facilis voluptatibus eligendi enim!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Portofolio::create([
        //     'title' => 'Aplikasi 2',
        //     'slug' => 'aplikasi-2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, minima!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis accusamus id ipsa sit nesciunt dolor, corporis aperiam veritatis eos consequuntur neque quam odio tempore itaque quos minima ea enim, ducimus quidem incidunt quasi expedita rerum ipsam. Magnam ipsum ducimus nesciunt unde impedit illum debitis, soluta dolor? distinctio repellat eum maiores numquam maxime suscipit nulla voluptatibus sunt molestiae sapiente ipsam enim, quae laudantium nihil ducimus consectetur fugiat deleniti corrupti aliquam veritatis. Unde similique minima iure! Fugiat facilis voluptatibus eligendi enim!',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Portofolio::create([
        //     'title' => 'Aplikasi 3',
        //     'slug' => 'aplikasi-3',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, minima!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis accusamus id ipsa sit nesciunt dolor, corporis aperiam veritatis eos consequuntur neque quam odio tempore itaque quos minima ea enim, ducimus quidem incidunt quasi expedita rerum ipsam. Magnam ipsum ducimus nesciunt unde impedit illum debitis, soluta dolor? distinctio repellat eum maiores numquam maxime suscipit nulla voluptatibus sunt molestiae sapiente ipsam enim, quae laudantium nihil ducimus consectetur fugiat deleniti corrupti aliquam veritatis. Unde similique minima iure! Fugiat facilis voluptatibus eligendi enim!',
        //     'category_id' => 3,
        //     'user_id' => 1

        // ]);

        // Portofolio::create([
        //     'title' => 'Aplikasi 4',
        //     'slug' => 'aplikasi-4',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, minima!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis accusamus id ipsa sit nesciunt dolor, corporis aperiam veritatis eos consequuntur neque quam odio tempore itaque quos minima ea enim, ducimus quidem incidunt quasi expedita rerum ipsam. Magnam ipsum ducimus nesciunt unde impedit illum debitis, soluta dolor? distinctio repellat eum maiores numquam maxime suscipit nulla voluptatibus sunt molestiae sapiente ipsam enim, quae laudantium nihil ducimus consectetur fugiat deleniti corrupti aliquam veritatis. Unde similique minima iure! Fugiat facilis voluptatibus eligendi enim!',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
        
    }
}
