<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = [
      'name'
    ];

    protected $hidden = [
      'id'
    ];

    public function companies()
    {
      return $this->hasOne('App/Companies');
    }
}
