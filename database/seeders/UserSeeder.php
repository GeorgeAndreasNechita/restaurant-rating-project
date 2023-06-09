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
        User::create([
            'name'=> 'Andreas George Nechita',
            'email'=> 'andresnechita@yahoo.com',
            'password' => '$2y$10$gONmtSxRLldB5i.xQFzb3eOGbi8CpI/Lp6Hoy7oNT6mu63Z/koNuG',
            'remember_token' => "sKFqSSdaWtYhu6cWKEwSWXWylvkUGQ5mKcEuXV6izn1beJG4eATqZdpVw4VF"
        ]);
    }
}
