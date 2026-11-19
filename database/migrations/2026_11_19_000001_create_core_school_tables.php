<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Reconstructed minimal schema for local development.
 * Based on the existing Eloquent models, not an original database export.
 */
class CreateCoreSchoolTables extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('bg_id')->nullable();
            $table->unsignedBigInteger('nal_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('lga_id')->nullable();
            $table->string('code')->nullable();
            $table->string('user_type')->default('student');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('class_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('my_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('class_type_id')->nullable();
            $table->timestamps();
        });

        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('my_class_id');
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Schema::create('student_records', function (Blueprint $table) {
            $table->id();
            $table->string('session')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('my_class_id')->nullable();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('my_parent_id')->nullable();
            $table->unsignedBigInteger('dorm_id')->nullable();
            $table->string('dorm_room_no')->nullable();
            $table->string('adm_no')->nullable();
            $table->string('year_admitted')->nullable();
            $table->boolean('wd')->default(false);
            $table->date('wd_date')->nullable();
            $table->boolean('grad')->default(false);
            $table->date('grad_date')->nullable();
            $table->string('house')->nullable();
            $table->unsignedInteger('age')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_records');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('my_classes');
        Schema::dropIfExists('class_types');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('users');
    }
}
