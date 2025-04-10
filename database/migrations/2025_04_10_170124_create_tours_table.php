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
            $table->unsignedBigInteger('tour_category_id');
            $table->foreign('tour_category_id')->references('id')->on('tour_categories')
            ->onDelete('cascade');
            $table->string('price');
            $table->string('discounted_price')->nullable();
            $table->string('number_of_days')->nullable();
            $table->string('number_of_nights')->nullable();
            $table->string('pickup')->nullable();
            $table->string('drop')->nullable();
            $table->longText('itenary_overview')->nullable();
            $table->longText('other_info')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('index_status')->default(1);


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
