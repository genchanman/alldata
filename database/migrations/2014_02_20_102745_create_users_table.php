<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('class')->nullable();
            $table->string('e-mail')->unique('e-mail')->nullable();
            $table->string('password')->nullable();
            $table->enum('provider', ['line']);
            $table->string('provided_user_id');
            $table->string('profile');
            $table->timestamps();
            $table->unique(['provider', 'provided_user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
