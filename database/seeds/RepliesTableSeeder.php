<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class RepliesTableSeeder extends Seeder
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


      foreach($posts as $postid){
        for($i=0;$i<20;$i++){
          Reply::create([
            'body' => $faker->paragraph(rand(1,2)),
            'user_id'=>$users[rand(1,$users->Count())],
            'post_id'=>$postid,
          ]);

      }


    }
}
