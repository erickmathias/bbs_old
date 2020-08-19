<?php

use App\Models\Mproperty;
use Illuminate\Database\Seeder;

class MaterialPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mproperty = Mproperty::create([
            'standard_code_id'=>'0',
            'property'=>'T',
        ]);
        $mproperty = Mproperty::create([
            'standard_code_id'=>'0',
            'property'=>'R',
        ]);
        $mproperty = Mproperty::create([
            'standard_code_id'=>'0',
            'property'=>'Y',
        ]);
    }
}
