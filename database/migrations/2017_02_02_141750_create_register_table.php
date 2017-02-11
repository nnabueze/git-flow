<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key_id');
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('name_company')->nullable();
            $table->string('position')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('email')->nullable();
            $table->enum('status', ['0', '1']);
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
        Schema::dropIfExists('registers');
    }
}
