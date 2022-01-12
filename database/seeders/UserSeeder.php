<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'name' => "Ferdowsur Rahman",
                'username' => "ferdows",
                'email' => "admin@admin.com",
                'address' => "Uttara",
                'phone_number' => "01781844900",
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'role_id' => 1,
            ],
        ];
        User::insert($users);
    }
}
