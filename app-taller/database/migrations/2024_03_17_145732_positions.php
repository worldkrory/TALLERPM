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
        Schema::create('positions', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger("department_id");
            $table->foreign("department_id")->references("id")->on("departments");
            $table->string('name');
            $table->dateTime('hourly_rate', 0);
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
    }
};
