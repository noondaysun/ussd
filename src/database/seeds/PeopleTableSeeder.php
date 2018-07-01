<?php

use App\Person;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment('local')) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::table('people')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
            factory(Person::class, 100)->create();
        }
    }
}
