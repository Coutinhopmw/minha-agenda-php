<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Console\View\Components\Task as ComponentsTask;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class taskSeeder extends Seeder
{
    public function run()
    {   
        Post::create([
            'title'=>'1º Task seeder',
            'description' => '1º Task seeder',
            'user_id' => 1,
        ]);
    }
}
