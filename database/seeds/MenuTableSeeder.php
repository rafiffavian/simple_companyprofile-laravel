<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([[
            'name' => 'Breakfast & Starters'
        ], [
        	'name' => 'Main Course'
        ],[
        	'name' => 'Dinner'
        ],[
        	'name' => 'Desserts'
        ]]);
    }
}
