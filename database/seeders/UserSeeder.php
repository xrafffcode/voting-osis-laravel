<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'nama' => 'Muhamad Rafli Al Farizqi',
            'nis' => '3103120138',
            'kelas_id' => 27,
            'voting' => false,
            'voting_id' => null,
            'role' => 'admin',
            'password' => bcrypt('200405'),
        ]);
    }
}
