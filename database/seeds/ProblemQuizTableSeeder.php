<?php

use Illuminate\Database\Seeder;
use App\Quiz;
use App\Problem;

class ProblemQuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     $quizzes=Quiz::all()->map(function($item) {
       return $item->id;
     })
     ->toArray();

     $problems=Problem::all()->map(function($item) {
       return $item->id;
     })
     ->toArray();
    public function run()
    {
      $faker = Faker\Factory::create();
      foreach($quizzes as $quizid)
      for($i=0;$i<15;$i++){
        Quiz::create([
          'name' => $faker->word,

        ]);
    }
    }
}
