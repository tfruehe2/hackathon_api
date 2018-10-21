<?php

use Illuminate\Database\Seeder;

class seed_criteria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $criteria = [
          ['name' =>"Function", 'description'=>""],
          ['name' =>"Design", 'description'=>""],
          ['name' =>"Environmental", 'description'=>""],
          ['name' =>"Cost", 'description'=>""],
          ['name' =>"Labor/Planning", 'description'=>""],
          ['name' =>"Security", 'description'=>""],
          ['name' =>"Materials", 'description'=>""],
          ['name' =>"Complexity", 'description'=>""],
        ];

        foreach($criteria as $c)
        {
          \App\Criteria::firstOrCreate($c);
        }
    }
}
