<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
        User::updateOrCreate(
            ['email' => 'dchilembomanuel@gmail.com'],
            [
                'name' => 'Chilembo Manuel',
                'telefone' => '+244 937238590',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]);
    }
    
}
