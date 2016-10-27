<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Player;
class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $teams=Team::all()->map(function($item) {
        return $item->id;
      })
      ->toArray();
      $today = Carbon\Carbon::today();

      foreach($teams as $teamid) {
        for($i=0;$i<12;$i++){
          Player::create([
            'name'=>$faker->name,
            'type'=>$faker->numberBetween($min=0,$max=2),
            'dob'=>$today->subYears(rand(20, 30)),

            'team_id' => $teamid,
          ]);}
      }
    }
}
