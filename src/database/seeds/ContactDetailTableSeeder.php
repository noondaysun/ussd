<?php

use App\Domain\Entities\ContactDetails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ContactDetailTableSeeder extends Seeder
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
            DB::table('contact_details')->truncate();
            factory(ContactDetails::class, 100)->create();
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }
    }
}
