<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ernesto',
            'email' => 'ernesto@example.com',
            'password'=> '1234'


            //php artisan db:seed
        ]);
        User::factory()->create([
            'name' => 'Beatriz',
            'email' => 'bia@example.com',
            'password'=> '1234'
        ]);
        
    }
}
