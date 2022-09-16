<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        User::create([
           
            'fname' => 'Sabuj',
            'lname' => 'Sathi',
            'email' => 'sabuj@hotmail.com',
            'password' => Hash::make('Sabuj1234'),
            'phn_num' => '9999999999',
            'DOB' => '2000-10-25',
            'idcard' => 'Adhar',
            'idimage' => rand().'jpg',
            'gander' => 'male',

        
    ]);

    }
}
