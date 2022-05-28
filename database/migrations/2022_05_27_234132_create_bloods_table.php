<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloods', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->longText('email')->nullable();
            $table->longText('phone')->nullable();
            $table->longText('btype')->nullable();
            $table->longText('age')->nullable();
            $table->dateTime('dt');
            $table->longText('anyd')->nullable();
            $table->longText('address')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->enum('status',['complete','incomplete'])->default('incomplete');
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
        Schema::dropIfExists('bloods');
    }
}
