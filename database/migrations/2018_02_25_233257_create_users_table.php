<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('uid')->unique();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger('major_id')->nullable();
            $table->foreign('major_id')->references('id')->on('major')->onDelete('cascade');
            $table->unsignedInteger('nid')->unique();
            $table->string('role')->nullable();
            $table->rememberToken();
            $table->timestamps();
            
        });
        
        
        $Admin = new App\Models\User();
        $Admin->uid = 435710111;
        $Admin->name = 'AdminTest';
        $Admin->phone = '0551417854';
        $Admin->email = 'Admin@admin.com';
        $Admin->password = bcrypt('123456');
        $Admin->nid = 1234567890;
        $Admin->role = 'Admin';
        $Admin->save();
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
