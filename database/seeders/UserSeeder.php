<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Cássio Coutinho Lima',
            'email' => 'cassiocoutinho258@gmail.com.br',
            'password'=> Hash::make('Lc181340sl@')
        ]);
    }
}
