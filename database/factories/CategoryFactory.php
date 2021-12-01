<?php

use Faker\Generator as Faker;
use App\Models\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' 		=> $faker->username,
        'slug' 		=> str_slug($faker->username),  
        'parent_id' => 0
    ];
});
