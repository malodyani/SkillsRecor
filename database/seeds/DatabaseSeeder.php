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
        
    	
    	for ($i = 50; $i < 50; $i++){
    		
    		
    	DB::table('college')->insert([
    			'name' => str_random(20),
    	]);
    	
    	DB::table('major')->insert([
    			'name' => str_random(20),
    			'college_id' => $i + 1,
    	]);
    	
    	DB::table('users')->insert([
    			'name' => str_random(20),
    			'major_id' => $i + 1,
    			'password' => bcrypt(str_random(20)),
    			'uid' => $i*5,
    			'nid' => $i*6,
    			'email'=> $i*2 .'@gmail.com',
    			
    	]);
    	
    	DB::table('school')->insert([
    			'name' => str_random(20),
    	]);
    	
    	DB::table('type')->insert([
    			'name' => str_random(20),
    	]);
    	
    	DB::table('course')->insert([
    			'name' => str_random(20),
    			'school_id' => $i+1,
    			'student_id' => $i+1,
    			'type_id' => $i+1,
    			'start_at'=> Carbon\Carbon::now(),
    			'end_at' => Carbon\Carbon::now(),
    			'hours' => $i+1,
    	]);
    	
    	
    	DB::table('award')->insert([
    			'name' => str_random(20),
    			'school_id' => $i+1,
    			'student_id' => $i+1,
    			'took_at' => Carbon\Carbon::now(),
    			
    	]);
    	
    	
    	}
    	
    	
    }
}
