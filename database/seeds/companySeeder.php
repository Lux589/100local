<?php

use Illuminate\Database\Seeder;
use App\Companies;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Companies::class, 50)->create()->each(function ($company) {
          $company->services()->save(factory(Services::class)->make());
          $company->ratings()->save(factory(Ratings::class)->make());
        });
    }
}
