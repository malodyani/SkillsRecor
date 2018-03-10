<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
    	
    	for ($i = 0; $i < 50; $i++){
    		
    		
    	DB::table('college')->insert([
    			'name' => str_random(20),
    	]);
    	
    	DB::table('major')->insert([
    			'name' => str_random(20),
    			'college_id' => 1,
    	]);
    	
    	
    	DB::table('users')->insert([
    			'name' => str_random(20),
    			'college_id' => 1,
    	]);
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	}
    	
    	
    }
}
