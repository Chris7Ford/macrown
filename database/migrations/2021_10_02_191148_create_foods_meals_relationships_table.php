<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsMealsRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods_meals_relationships', function (Blueprint $table) {
            $table->id();
            $table->integer("meal_id");
            $table->integer("food_id");
            $table->float("num_servings");
            $table->index(["meal_id"]);
            $table->index(["food_id"]);
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
        Schema::dropIfExists('foods_meals_relationships');
    }
}
