<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MhsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_mhs'=>$this->faker->string(mt_rand(1,10)),
            'nim'=>$this->faker->string(mt_rand(1,10)),
            'fakultas'=>$this->faker->string(mt_rand(1,10)),
            'prodi'=>$this->faker->string(mt_rand(1,10)),
            'user_id' => '1'
        ];
    }
}
