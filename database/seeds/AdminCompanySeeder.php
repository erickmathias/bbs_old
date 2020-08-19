<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class AdminCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::create([
            'id'=>0,
            'name'=>'Main Company',
            'main_activity'=>'BSS Administrator',
            'postal_address'=>'',
            'email'=>'info@bss.com',
            'fax'=>'',
            'telephone'=>'',
            'website'=>'',
            'municipal'=>'',
            'region'=>'',
            'national'=>'',
            'logo_path'=>'',
        ]);
    }
}
