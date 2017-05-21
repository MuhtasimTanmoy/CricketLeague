<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];
    protected $dates = ['dob'];

    public function team()
    {
      return $this->belongsTo(Team::class);
    }
}
