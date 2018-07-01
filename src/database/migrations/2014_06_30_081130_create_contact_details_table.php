<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_details', function (Blueprint $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->string('mobile_telephone')->nullable();
            $table->string('house_telephone')->nullable();
            $table->string('work_telephone')->nullable();
            $table->text('physical_address')->nullable();
            $table->text('postal_address')->nullable();
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
        Schema::dropIfExists('contact_details');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
