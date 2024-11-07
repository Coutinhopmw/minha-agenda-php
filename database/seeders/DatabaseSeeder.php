<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TaskSeeder::class,
        ]);
        
        // \App\Models\User::factory(10)->create();
    }
}
