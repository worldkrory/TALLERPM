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
        Schema::create('employees', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger("position_id");
            $table->foreign("position_id")->references("id")->on("positions");
            $table->string('name');
            $table->string('lastname');
            $table->string('card');
            $table->date('start_date');
            $table->date('start_contract_date');
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
