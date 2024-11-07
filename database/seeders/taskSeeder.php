<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'Minha primeira Task',
            'description' => 'João 8:32',
            'due_date' => '2024-11-06 21:23:00',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
