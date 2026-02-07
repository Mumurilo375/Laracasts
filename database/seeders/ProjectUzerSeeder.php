<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Uzer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectUzerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $uzers = Uzer::all();

        foreach ($projects as $project) {
            // Associa entre 2 e 5 uzers aleatórios a cada project
            $randomUzers = $uzers->random(rand(2, 5))->pluck('id');
            $project->uzers()->attach($randomUzers);
        }
    }
}
