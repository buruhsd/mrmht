<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
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
        $member = new Category();
        $member->name = $faker->name;
        $member->description = $faker->realText($maxNbChars = 200, $indexSize = 2);
        $member->save();
      }
    }
}
