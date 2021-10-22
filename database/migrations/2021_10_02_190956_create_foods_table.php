<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("barcode")->nullable();
            $table->integer("created_by");
            $table->integer("protein");
            $table->integer("carbs");
            $table->integer("fat");
            $table->integer("calories");
            $table->integer("number_of_servings_container");
            $table->string("serving_size");
            $table->index(["created_by"]);
            $table->index(["protein"]);
            $table->index(["carbs"]);
            $table->index(["fat"]);
            $table->index(["calories"]);
            $table->index(["number_of_servings_container"]);
            $table->index(["serving_size"]);
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
        Schema::dropIfExists('foods');
    }
}
