<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffinfos', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->string('birthday');
            $table->string('gender');
            $table->string('nrc');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('religion');
            $table->string('nationality');
            $table->string('marital_status');
            $table->text('degree');
            $table->string('start_work_date');
            $table->string('current_position');
            $table->string('salary');
            $table->string('current_position_date');
            $table->string('phone');
            $table->string('email');
            $table->text('address');
            $table->text('current_address');
            $table->text('remark');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('staffinfos');
    }
}
