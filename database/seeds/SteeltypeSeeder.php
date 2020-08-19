<?php

use App\Models\Steeltype;
use Illuminate\Database\Seeder;

class SteeltypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stype = Steeltype::create([
            'name'=>'T',
        ]);
        $stype = Steeltype::create([
            'name'=>'R',
        ]);
        $stype = Steeltype::create([
            'name'=>'Y',
        ]);
    }
}
