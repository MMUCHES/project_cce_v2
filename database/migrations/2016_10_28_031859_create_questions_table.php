<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {

            $table->integer('id');
            $table->string('text');
            $table->string('type');
            $table->integer('parent_id')->nullable();
            $table->timestamps();

            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::drop("questions");
    }
}