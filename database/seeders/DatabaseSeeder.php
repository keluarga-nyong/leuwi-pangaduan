<?php

namespace Database\Seeders;

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
        \App\Models\Admin::create([
            'name'    => 'admin',
            'phone'    =>'098766789',
            'email'    =>  'admin@admin.com',
            'password'    => bcrypt('admin123')
    ]);
        // \App\Models\User::factory(10)->create();
        
    }
}
