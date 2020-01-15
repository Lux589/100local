<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description');
            $table->integer('visits')->default(0);
            $table->string('status')->default('submitted');
            $table->boolean('active')->default(false);
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('surbub')->nullable();
            $table->string('city_town')->nullable();
            $table->integer('postal_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
