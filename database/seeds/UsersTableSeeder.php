<?php

use App\Role;
use App\User;
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
        // Seed users with role_id referencing roles table
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_id' => Role::where('name', 'admin')->first()->id,
        ]);

        // Seed other users with different roles similarly
        User::create([
            'name' => 'Initiator User',
            'email' => 'initiator@example.com',
            'password' => bcrypt('password'),
            'role_id' => Role::where('name', 'initiator')->first()->id,
        ]);

        User::create([
            'name' => 'Consultant User',
            'email' => 'consultant@example.com',
            'password' => bcrypt('password'),
            'role_id' => Role::where('name', 'consultant')->first()->id,
        ]);
    }
}
