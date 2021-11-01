<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->string('fully_remote')->nullable();
            $table->string('work_region')->nullable();
            $table->longText('description')->nullable();
            $table->integer('salary')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('uploaded_by')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
