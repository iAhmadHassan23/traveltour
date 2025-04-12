<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('price');
            $table->string('discounted_price')->nullable();
            $table->string('number_of_days')->nullable();
            $table->string('number_of_nights')->nullable();
            $table->string('pickup')->nullable();
            $table->string('drop')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->longText('itenary_overview')->nullable();
            $table->longText('other_info')->nullable();
            $table->longText('exclusives')->nullable();
            $table->longText('inclusives')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('index_status')->default(1);
            $table->tinyInteger('transportation')->default(0)->nullable();
            $table->tinyInteger('meals')->default(0)->nullable();
            $table->tinyInteger('stay_included')->default(0)->nullable();
            $table->tinyInteger('sight_seeing')->default(0)->nullable();
            $table->tinyInteger('assistance')->default(0)->nullable();
            $table->string('meta_image', 150)->nullable();
            $table->string('meta_title', 150)->nullable();
            $table->string('meta_description', 150)->nullable();
            $table->longText('media')->nullable();
            $table->dateTime('published_at')->nullable();



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
        Schema::dropIfExists('tours');
    }
};
