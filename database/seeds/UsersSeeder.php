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
     DB::table('users')->insert([
        'id'=>1,
        'name'=>'jason'
        'age'=>
         ]);   
    }
    
}