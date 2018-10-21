<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_criterias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rating');
            $table->unsignedInteger('review_id');
            $table->unsignedInteger('criteria_id');
            $table->timestamps();

            $table->foreign('criteria_id')->references('id')->on('criterias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_criterias');
    }
}
