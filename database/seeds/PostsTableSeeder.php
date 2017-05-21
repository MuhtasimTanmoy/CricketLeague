<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class PostsTableSeeder extends Seeder
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

      foreach($users as $userid){
        for($i=0;$i<2;$i++){
          Post::create([
            'body' => $faker->paragraph(rand(5,8)),
             'user_id'=>$userid,
          ]);
      }

      }


    }
}
