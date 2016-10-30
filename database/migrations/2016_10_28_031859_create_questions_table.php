<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {

            $table->increments('id');
            $table->text('student_id');
            $table->integer('radio_1_1');
            $table->integer('radio_1_2');
            $table->integer('radio_1_3');
            $table->integer('radio_1_4');
            $table->integer('radio_1_5');
            $table->integer('radio_1_6');
            $table->integer('radio_1_7');
            $table->integer('radio_1_8');
            $table->integer('radio_1_9');
            $table->integer('radio_1_10');
            $table->integer('radio_1_11');
            $table->integer('radio_1_12');
            $table->integer('radio_1_13');
            $table->integer('radio_1_14');
            $table->integer('radio_1_15');
            $table->integer('radio_1_16');
            $table->integer('radio_1_17');
            $table->integer('radio_1_18');
            $table->integer('radio_1_19');
            $table->integer('radio_1_20');
            $table->integer('radio_1_21');
            $table->integer('radio_1_22');
            $table->integer('radio_1_23');
            $table->integer('radio_1_24');
            $table->integer('radio_1_25');
            $table->integer('radio_2_1');
            $table->integer('radio_2_2');
            $table->integer('radio_2_3');
            $table->integer('radio_2_4');
            $table->integer('radio_2_5');
            $table->integer('radio_2_6');
            $table->integer('radio_2_7');
            $table->integer('radio_2_8');
            $table->integer('radio_2_9');
            $table->integer('radio_2_10');
            $table->integer('radio_2_11');
            $table->integer('radio_2_12');
            $table->integer('radio_2_13');
            $table->integer('radio_2_14');
            $table->integer('radio_2_15');
            $table->integer('radio_2_16');
            $table->integer('radio_2_17');
            $table->integer('radio_2_18');
            $table->integer('radio_2_19');
            $table->integer('radio_2_20');
            $table->integer('radio_2_21');
            $table->integer('radio_2_22');
            $table->integer('radio_2_23');
            $table->integer('radio_2_24');
            $table->integer('radio_2_25');
            $table->integer('radio_2_26');
            $table->integer('radio_2_27');
            $table->integer('radio_2_28');
            $table->integer('radio_2_29');
            $table->integer('radio_2_30');
            $table->integer('radio_2_31');
            $table->integer('radio_2_32');
            $table->integer('radio_2_33');
            $table->integer('radio_2_34');
            $table->integer('radio_2_35');
            $table->integer('radio_2_36');
            $table->integer('radio_2_37');
            $table->integer('radio_2_38');
            $table->integer('radio_2_39');
            $table->integer('radio_2_40');
            $table->text('comment_1');
            $table->text('comment_2');
            $table->text('comment_3');
            $table->text('comment_4');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop("questions");
    }
}