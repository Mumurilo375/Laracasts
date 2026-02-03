<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Uzer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // User::factory(10)->create();

         User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ]);
        
        // Criar 10 Projects e 10 Uzers
        Project::factory(10)->create();
        Uzer::factory(10)->create();
        
        // Associar Uzers com Projects
        $this->call(ProjectUzerSeeder::class);
        
        $this->call(job_listing::class);
    }
}
