<?php

use Illuminate\Database\Seeder;
use App\Promo;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::Create();

        for ($i=0; $i < 5; $i++) {
        $member = new Promo();
        $member->name = $faker->name;
        $member->description = $faker->realText($maxNbChars = 200, $indexSize = 2);
        $member->image = 'aaaa.jpg';
        $member->save();
        }
    }
}
