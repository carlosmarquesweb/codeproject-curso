<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    public function run()
    {
        \CodeProject\Client::truncate();
        factory(\CodeProject\Client::class,10)->create();
    }
}
