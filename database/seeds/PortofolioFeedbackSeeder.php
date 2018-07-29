<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;
use App\Portofolio;
use App\Feedback;

class PortofolioFeedbackSeeder extends Seeder
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
            $p= Portofolio::create([
                'user_id' => User::all()->random()->id,
                'nama_project' => $faker->unique()->text(25),
                'thumbnail' => explode(chr(92), $faker->image('public/images/portofolio', 400, 300))[1],
                'keterangan' => $faker->realText(200),
                'created_at' => $faker->dateTimeThisYear,
            ]);
        }
        for ($a = 0; $a < 5; $a++){
            Feedback::create([
                'portofolio_id' => $p->id,
                'nama' => $faker->name,
                'email'=> $faker->email,
                'komentar' => $faker->realText(500),
                'created_at' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
