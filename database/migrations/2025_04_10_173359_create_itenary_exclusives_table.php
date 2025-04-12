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
        Schema::create('itenary_exclusives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('itenary_id');
            $table->foreign('itenary_id')->references('id')->on('itenaries')
                ->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('heading')->nullable();
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
        Schema::dropIfExists('itenary_exclusives');
    }
};
