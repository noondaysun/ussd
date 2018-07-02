<?php

use App\Domain\Entities\ContactDetail;
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
            DB::table('contact_details')->truncate();
            factory(ContactDetail::class, 100)->create();
        }
    }
}
