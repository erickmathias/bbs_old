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
        // $this->call(UsersTableSeeder::class);
         //$this->call(AdminCompanySeeder::class);
         //$this->call(CreateAdminUserSeeder::class);
         //$this->call(PermissionTableSeeder::class);
         //$this->call(StandardCodeSeeder::class);
         //$this->call(MaterialPropertySeeder::class);
         $this->call(SteeltypeSeeder::class);
    }
}
