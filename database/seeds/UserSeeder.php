<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \Illuminate\Support\Facades\DB::table('users')->truncate();

        $users = [
            ['admin@gmail.com', 'admin123', 'admin'],
        ];

        foreach ($users as $user) {
            \App\Model\Entities\User::create([
                'email' => $user[0],
                'password' => \Illuminate\Support\Facades\Hash::make($user[1]),
                'name' => $user[2],
            ]);
        }

        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }
}
