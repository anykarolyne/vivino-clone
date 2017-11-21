<?php

use Illuminate\Database\Seeder;

class TypeAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('type_accounts')->insert([

       		'name' => 'Corrente',

       		]);

       	DB::table('type_accounts')->insert([

       		'name' => 'Poupança',

       		]);
    }
}
