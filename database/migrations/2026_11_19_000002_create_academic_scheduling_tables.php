<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Additional reconstructed tables inferred from the existing Eloquent models.
 * This is a development baseline, not a verified original database schema.
 */
class CreateAcademicSchedulingTables extends Migration
{
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('my_class_id')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });

        Schema::create('time_table_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('my_class_id')->nullable();
            $table->unsignedBigInteger('exam_id')->nullable();
            $table->string('year')->nullable();
            $table->timestamps();
        });

        Schema::create('time_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ttr_id')->nullable();
            $table->string('timestamp_from')->nullable();
            $table->string('timestamp_to')->nullable();
            $table->string('full')->nullable();
            $table->string('time_from')->nullable();
            $table->string('time_to')->nullable();
            $table->string('hour_from')->nullable();
            $table->string('min_from')->nullable();
            $table->string('meridian_from')->nullable();
            $table->string('hour_to')->nullable();
            $table->string('min_to')->nullable();
            $table->string('meridian_to')->nullable();
            $table->timestamps();
        });

        Schema::create('time_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ttr_id')->nullable();
            $table->unsignedBigInteger('ts_id')->nullable();
            $table->date('exam_date')->nullable();
            $table->string('day')->nullable();
            $table->string('timestamp_from')->nullable();
            $table->string('timestamp_to')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->timestamps();
        });

        Schema::create('dorms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dorms');
        Schema::dropIfExists('time_tables');
        Schema::dropIfExists('time_slots');
        Schema::dropIfExists('time_table_records');
        Schema::dropIfExists('subjects');
    }
}
