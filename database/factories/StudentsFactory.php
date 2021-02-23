<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'nim' => $faker->numerify('############'),
        'email' => $faker->email,
        'jurusan' => $faker->randomElement(['Teknik Sipil', 'Teknik Informatika', 'Pendidikan Teknik Informatika', 'Pendidikan Biologi', 'Kedokteran', 'Hukum', 'Psikologi']),
    ];
});
