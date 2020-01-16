<?php

use Illuminate\Database\Seeder;
use App\Companies;
use App\Services;
use App\Ratings;
use App\Categories;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Companies::class, 50)->create();
    }
}
