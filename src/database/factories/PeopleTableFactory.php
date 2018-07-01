<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement([
            'Mr', 'Mrs', 'Ms', 'Mx', 'Dr', 'Prof', 'Sir', 'Madam', 'Dame'
        ]),
        'first_name' => $faker->firstName,
        'middle_name' =>$faker->firstName,
        'surname' => $faker->lastName,
    ];
});
