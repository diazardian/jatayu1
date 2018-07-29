<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;
use App\Carousel;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        for ($c = 0; $c < 5; $c++){
            Carousel::create([
                'user_id' => User::all()->random()->id,
                'dir' => explode(chr(92), $faker->image('public/images/carousel', 1920, 1080))[1],
                'created_at' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
