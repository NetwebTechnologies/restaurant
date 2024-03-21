<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_food', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_type_id')->nullable();
            $table->foreign('restaurant_type_id')->on('restaurant_types')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('food_category_id')->nullable();
            $table->foreign('food_category_id')->on('food_categories')->references('id')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('surge')->nullable();
            $table->string('unit_specification')->nullable();
            $table->string('package_contains')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('description')->nullable();
            $table->string('food_type')->nullable();
            $table->boolean('delivery_available')->default(0);
            $table->boolean('featured')->default(0);
            $table->text('image')->nullable();
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
        Schema::dropIfExists('restaurant_food');
    }
}
