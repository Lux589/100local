<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";
    protected $primaryKey = 'id';

    protected $fillable = [
      'name'
    ];

    protected $hidden = [
      'id'
    ];

    public function companies()
    {
      return $this->belongsTo('App\Companies', 'cotegory_id', 'id');
    }
}
