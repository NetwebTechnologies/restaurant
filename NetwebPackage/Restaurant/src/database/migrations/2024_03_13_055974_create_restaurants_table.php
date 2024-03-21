<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_type_id')->nullable();
            $table->foreign('restaurant_type_id')->on('restaurant_types')->references('id')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->foreign('supplier_id')->on('suppliers')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->on('countries')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->on('cities')->references('id')->onDelete('cascade');

            $table->date('valid_from_date')->nullable();
            $table->date('valid_to_date')->nullable();

            $table->string('valid_from_time')->nullable();
            $table->string('valid_to_time')->nullable();

            $table->string('no_of_tables')->nullable();
            $table->string('currency')->nullable();
            $table->longText('blackout_days')->nullable();
            $table->text('restaurant_available_days')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('available_for_delivery')->default(0)->comment('Default 0: No');
            $table->boolean('drafted_status')->default(1)->comment('Default 1: Yes');
            $table->boolean('status')->default(1)->comment('Default 1: Active');
            $table->boolean('approve_status')->default(0)->comment('Default 0: No');
            $table->boolean('best_seller_status')->default(0)->comment('Default 0: No');
            $table->boolean('popular_status')->default(0)->comment('Default 0: No');
            $table->unsignedBigInteger('created_user_id')->nullable();
            $table->foreign('created_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('created_supplier_id')->nullable();
            $table->foreign('created_supplier_id')->references('id')->on('suppliers')->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('restaurants');
    }
}
