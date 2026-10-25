<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\IceCreamSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            IceCreamSeeder::class,
        ]);
    }
}