<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;
use App\Models\Admin\Permiso;
use Illuminate\Support\Str;

$factory->define(Permiso::class, function (Faker $faker) {
    $name = $faker->name;
    $slug = Str::slug($name);
    
    return [
        'nombre' => $name,
        'slug' => $slug
    ];
});
