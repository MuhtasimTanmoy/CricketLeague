<?php

use Illuminate\Database\Seeder;

use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for($i=0;$i<20;$i++){
        Team::create([
          'name' => $faker->word,
        ]);
    }
    }
}
