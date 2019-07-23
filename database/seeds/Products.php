<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Products::class, 10)->create();
    }
}