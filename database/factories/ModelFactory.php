<?php

$factory->define(CodeProject\Entities\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(CodeProject\Entities\Client::class, function ($faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence,
    ];
});

$factory->define(CodeProject\Entities\Project::class, function ($faker) {
    return [
        'owner_id' => rand(1,5),
        'client_id' => rand(1,5),
        'name' => $faker->company,
        'description' => $faker->sentence,
        'progress' => $faker->sentence,
        'status' => 'teste',
        'due_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});