<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
    /**
     * Run the database seeds.
     *
     * @return voidda
     */
    public function run()
    {
     DB::table('users')->insert([
        'id'=>1,
        'name'=>'jason',
        'class'=>11,
        'e-mail'=>'g@g.com',
        'password'=>'00000000'
         ]);   
    }
    
}
    

