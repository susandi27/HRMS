<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaverequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaverequests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('current_position');
            $table->string('department');
            $table->string('remaining_leave');
            $table->string('leave_start_date');
            $table->string('leave_end_date');
            $table->string('leave_date_total');
            $table->string('leave_duty_transfer_name');
            $table->text('address');
            $table->unsignedBigInteger('staffinfo_id');
            $table->unsignedBigInteger('leave_id');
            $table->foreign('staffInfo_id')->references('id')->on('staffinfos')->onDelete('cascade');
            $table->foreign('leave_id')->references('id')->on('leaves')->onDelete('cascade');
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
        Schema::dropIfExists('leaverequests');
    }
}
