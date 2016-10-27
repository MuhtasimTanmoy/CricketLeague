<?php

use Illuminate\Database\Seeder;
use App\Problem;
class ProblemsTableSeeder extends Seeder
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
        Problem::create([
          'body'=>$faker->paragraph(1),
          'option1'=>$faker->word,
          'option2'=>$faker->word,
          'option3'=>$faker->word,
          'option4'=>$faker->word,
          'answer'=>rand(1,4),

        ]);
    }
    }
}
