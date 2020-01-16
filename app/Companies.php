<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = "companies";

    protected $primaryKey = "id";

    protected $fillable = [
      'name',
      'description',
      'visits',
      'status',
      'active',
      'address_line_1',
      'address_line_2',
      'surbub',
      'city_town',
      'postal_code'
    ];

    protected $hidden = [
      'id'
    ];

    public function services()
    {
      return $this->hasOne('App/Services');
    }

    public function ratings()
    {
      return $this->hasOne('App/Ratings');
    }

    public function categories()
    {
      return $this->hasMany('App/Categories');
    }
}
