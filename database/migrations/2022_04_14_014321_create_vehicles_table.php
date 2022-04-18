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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('transmission');
            $table->bigInteger('mileage');
            $table->String('fuel');
            $table->integer('year');
            $table->string('img');
            $table->decimal('price', 8, 2);
            $table->string('status')->default('Availavle');
            $table->foreignId('vehicle_brand_id')->constrained('vehicle_brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('vehicle_category_id')->constrained('vehicle_categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('vehicles');
    }
};
