<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $table = 'ratings';

    protected $primaryKey = 'id';

    protected $fillable = [
      'company_id',
      'rating'
    ];

    protected $hidden = [
      'id'
    ];

    public function companies()
    {
      return $this->hasOne('App/Companies');
    }
}
