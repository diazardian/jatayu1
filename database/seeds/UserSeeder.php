<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        for ($c = 0; $c < 25; $c++){
            User::create([
                'name' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt('secret')
            ]);
        }
    }
}
