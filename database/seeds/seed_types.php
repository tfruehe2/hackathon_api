<?php

use Illuminate\Database\Seeder;

class seed_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
          ['name'=> 'Building Interior', 'description'=> 'Room layout and building interior structural view layering'],
          ['name'=> 'Structural Exterior', 'description' => 'Builing Exterior and city infrastructure view layering']
        ];

        foreach($types as $type)
        {
          \App\Type::firstOrCreate($type);
        }
    }
}
