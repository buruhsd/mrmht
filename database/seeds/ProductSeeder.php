<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
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

        for ($i=0; $i < 20; $i++) {
        $member = new Product();
        $member->name = $faker->name;
        $member->description = $faker->realText($maxNbChars = 200, $indexSize = 2);
        $member->merk = $faker->name;
        $member->price1 = 100000;
        $member->price2 = 345909;
        $member->price3 = 47777;
        $member->price4 = 555;
        $member->price5 = 211111;
        $member->category_id = 1;
        $member->save();
      }
    }
}
