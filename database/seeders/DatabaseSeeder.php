<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::factory()->create([
            'name' => 'Ernesto Coordenador',
            'email' => 'ernesto@example.com',
            'password'=> Hash::make('1234')


            //php artisan db:seed
        ]);
        User::factory()->create([
            'name' => 'Beatriz Limpeza',
            'email' => 'beatriz@example.com',
            'password'=> Hash::make('1234')
        ]);
        
    }
}
