<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('name')->nullable();
            $table->string('tab_points')->nullable();
            $table->string('addons')->nullable();
            $table->string('design')->default('list_design');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('pages')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
