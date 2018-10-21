<?php

use Illuminate\Database\Seeder;

class seed_type_criteria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_criteria = [
          ['type_id'=>1, 'criteria_id'=>1],
          ['type_id'=>1, 'criteria_id'=>2],
          ['type_id'=>1, 'criteria_id'=>3],
          ['type_id'=>1, 'criteria_id'=>4],
          ['type_id'=>1, 'criteria_id'=>5],
          ['type_id'=>1, 'criteria_id'=>6],
          ['type_id'=>1, 'criteria_id'=>7],
          ['type_id'=>1, 'criteria_id'=>8],
          ['type_id'=>2, 'criteria_id'=>1],
          ['type_id'=>2, 'criteria_id'=>2],
          ['type_id'=>2, 'criteria_id'=>3],
          ['type_id'=>2, 'criteria_id'=>4],
          ['type_id'=>2, 'criteria_id'=>5],
          ['type_id'=>2, 'criteria_id'=>6],
          ['type_id'=>2, 'criteria_id'=>7],
          ['type_id'=>2, 'criteria_id'=>8],
        ];

        foreach($type_criteria as $tc)
        {
          \App\TypeCriteria::firstOrCreate($tc);
        }
    }
}
