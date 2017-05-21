<?php

use Illuminate\Database\Seeder;
use App\Quiz;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      $users=User::all()->map(function($item) {
        return $item->id;
      })
      ->toArray();

      $posts=Post::all()->map(function($item) {
        return $item->id;
      })
      ->toArray();

      for($i=0;$i<20;$i++){
        Quiz::create([
          'name' => $faker->word,

        ]);
    }
    }
}
