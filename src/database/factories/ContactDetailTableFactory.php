<?php

use App\Domain\Entities\ContactDetails;
use Faker\Generator as Faker;

$factory->define(ContactDetails::class, function (Faker $faker) {
    return [
        'person_id' => $faker->numberBetween(1, 100),
        'mobile_telephone' => $faker->phoneNumber,
        'house_telephone' => $faker->phoneNumber,
        'work_telephone' => $faker->phoneNumber,
        'physical_address' => $faker->address,
        'postal_address' => $faker->address,
    ];
});
