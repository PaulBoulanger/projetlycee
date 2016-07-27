<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        App\User::create([
            'username' => 'Paul',
            'email' => 'boulangerpaul94@gmail.com',
            'role' => 'teacher',
            'password' => \Illuminate\Support\Facades\Hash::make('passpass'),
        ]);
        App\User::create([
            'username' => 'Sebastien',
            'email' => 'sebdesign@gmail.com',
            'role' => 'first_class',
            'password' => \Illuminate\Support\Facades\Hash::make('passpass'),
        ]);

        factory(App\User::class, 30)->create();
    }
}
