<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $table = 'ratings';

    protected $primaryKey = 'id';

    protected $fillable = [
      'rating'
    ];

    protected $hidden = [
      'id'
    ];

    public function companies()
    {
      return $this->belongsTo('App\Companies', 'ratings_id', 'id');
    }
}
