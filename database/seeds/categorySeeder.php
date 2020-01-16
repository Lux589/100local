<?php

use Illuminate\Database\Seeder;
use App\Categories;
use App\Campanies;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categories::class, 5)->create()->each(function ($category) {
          $category->companies()->save(factory(Campanies::class)->make());
        });
    }
}
