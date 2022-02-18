<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datas')->insert([
          'atbat'=>1,
          'storoke'=>1,
          'error'=>1,
          'run'=>1,
          'givedeadball'=>1,
          'hit'=>1,
          'strikeout'=>1,
          'outssllow'=>1,
          'remosepoint'=>1,
          'deadball'=>1,
          'doppotunity'=>1,
          'poppotunity'=>1,
          'gstrikeout'=>1,
          'givehit'=>1,
          'twobase'=>1,
          'threebase'=>1,
          'hr'=>1,
          ]);
    }
}
