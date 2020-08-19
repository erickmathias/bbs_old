<?php

use App\Models\Stdcode;
use Illuminate\Database\Seeder;

class StandardCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $stdcode1 = Stdcode::create([
           'standard_code'=>'BS. 4466 – 1989',
            'shape_code'=>'0',
            'remarks'=>'none',
        ]);
        $stdcode2 = Stdcode::create([
            'standard_code'=>'BS. 8866 – 2005',
            'shape_code'=>'0',
            'remarks'=>'none',
        ]);

    }
}
