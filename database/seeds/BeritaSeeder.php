<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;
use App\Berita;


class BeritaSeeder extends Seeder
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
            Berita::create([
                'user_id' => User::all()->random()->id,
                'judul' => $faker->unique()->text(20),
                'thumbnail' => explode(chr(92), $faker->image('public/images/berita', 400, 300))[1],
                'isi' => $faker->realText(2000),
                'created_at' => $faker->dateTimeThisYear,
            ]);
        }

    }
}
