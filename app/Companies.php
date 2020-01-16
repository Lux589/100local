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
      'postal_code',
      'category_id',
      'ratings_id',
      'services_id'
    ];

    protected $hidden = [
      'id'
    ];

    public function services()
    {
      return $this->hasOne('App\Services', 'id', 'services_id');
    }

    public function ratings()
    {
      return $this->hasOne('App\Ratings', 'id', 'ratings_id');
    }

    public function categories()
    {
      return $this->hasOne('App\Categories', 'id', 'category_id');
    }
}
