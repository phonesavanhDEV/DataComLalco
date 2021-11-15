<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbComsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_coms', function (Blueprint $table) {
            $table->id('id_com')->unique();
            $table->string('type');
            $table->string('brand');
            $table->string('SNID')->unique();
            $table->string('NCN')->unique();
            $table->string('status');
            $table->string('Comment')->nullable();
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
        Schema::dropIfExists('tb_coms');
    }
}
