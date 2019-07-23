<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Products;

use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'cate_id' => $faker->cate_id,
        'lop' => $faker->lop,
        'stt' => $faker->stt,
        'ghichu'=> $faker->ghichu,
    ];
});
