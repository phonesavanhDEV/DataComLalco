<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_staff', function (Blueprint $table) {
            $table->id();
            $table->integer('id_staff');
            $table->string('name_staff');
            $table->string('surname_staff');
            $table->string('sex');
            $table->string('position_staff');
            $table->string('leader_department');
            $table->string('office');
            $table->integer('tel');
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
        Schema::dropIfExists('tb_staff');
    }
}
