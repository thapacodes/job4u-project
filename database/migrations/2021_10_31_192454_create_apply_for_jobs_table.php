<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyForJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_for_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('avater')->nullable();
            $table->string('resume')->nullable();
            $table->mediumText('about')->nullable();
            $table->mediumText('education')->nullable();
            $table->mediumText('experience')->nullable();
            $table->mediumText('skill')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('apply_for_jobs');
    }
}
