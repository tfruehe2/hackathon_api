<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('seed_types');
        $this->call('seed_criteria');
        $this->call('seed_type_criteria');
    }
}
