<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employees_shifts', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger("employee_id");
            $table->foreign("employee_id")->references("id")->on("employees");
            $table->dateTime('shift_start', 0);
            $table->dateTime('shift_end', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('employees_shifts');
    }
};
