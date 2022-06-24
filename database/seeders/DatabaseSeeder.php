<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CardSeeder;
use Database\Seeders\DeskSeeder;
use Database\Seeders\ListSeeder;
use Database\Seeders\TaskSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DeskSeeder::class);
        $this->call(ListSeeder::class);
        $this->call(CardSeeder::class);
        $this->call(TaskSeeder::class);

    }
}
