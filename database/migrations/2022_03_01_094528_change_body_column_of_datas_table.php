<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBodyColumnOfDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datas', function (Blueprint $table) {
            $table->integer('atbat')->nullable()->change();
            $table->integer('storoke')->nullable()->change();
            $table->integer('error')->nullable()->change();
            $table->integer('run')->nullable()->change();
            $table->integer('givedeadball')->nullable()->change();
            $table->integer('hit')->nullable()->change();
            $table->integer('strikeout')->nullable()->change();
            $table->integer('outssllow')->nullable()->change();
            $table->integer('remosepoint')->nullable()->change();
            $table->integer('deadball')->nullable()->change();
            $table->integer('doppotunity')->nullable()->change();
            $table->integer('poppotunity')->nullable()->change();
            $table->integer('gstrikeout')->nullable()->change();
            $table->integer('givehit')->nullable()->change();
            $table->integer('twobase')->nullable()->change();
            $table->integer('threebase')->nullable()->change();
            $table->integer('hr')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datas', function (Blueprint $table) {
            //
        });
    }
}
