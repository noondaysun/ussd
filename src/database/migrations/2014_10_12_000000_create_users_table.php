<?php

use Illuminate\Support\Facades\DB;
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
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('live')->default(false);
            $table->index('person_id');
            $table->foreign('person_id')->references('id')->on('people');
            $table->timestamps();
            
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
