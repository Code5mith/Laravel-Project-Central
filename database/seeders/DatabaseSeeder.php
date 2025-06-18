<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Jhon Doe',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        Project::factory()->count(10)->create();


        // 10 projects 4 features for each and 3 tasks for each feature  ** (depreciated) 

        // Project::factory()
        //     ->count(10)
        //     ->has(
        //         BacklogItem::factory()
        //             ->count(4)
        //             ->has(
        //                 Tasks::factory()->count(3)
        //             )
        //     )
        //     ->create();

    
    }
}
