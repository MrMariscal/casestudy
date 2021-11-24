<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id')->unique()->nullable();
            $table->string('name_prefix', 10);
            $table->string('first_name', 100);
            $table->string('middle_initial', 1)->nullable();
            $table->string('last_name', 100);
            $table->string('gender', 1);
            $table->string('e_mail')->unique()->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('mothers_maiden_name')->nullable();
            $table->date('date_of_birth');
            $table->date('date_of_joining');
            $table->decimal('salary', 8, 2);
            $table->string('ssn', 11);
            $table->string('phone_no', 20);
            $table->string('city', 189); // Longest City Name is in Bangkok 189 characters long
            $table->string('state', 50);
            $table->string('zip', 18); //Longest Zip code is 18 characters in Chile
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
        Schema::dropIfExists('employees');
    }
}
