<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class job_listing extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            ['title' => 'Desenvolvedor PHP Junior', 'salary' => 'R$ 3.000'],
            ['title' => 'Desenvolvedor Laravel Pleno', 'salary' => 'R$ 7.000'],
            ['title' => 'Engenheiro de Software Senior', 'salary' => 'R$ 15.000'],
            ['title' => 'Tech Lead', 'salary' => 'R$ 20.000'],
            ['title' => 'QA Tester', 'salary' => 'R$ 4.000'],
            ['title' => 'DevOps Engineer', 'salary' => 'R$ 10.000'],
            ['title' => 'Product Manager', 'salary' => 'R$ 12.000'],
            ['title' => 'UI/UX Designer', 'salary' => 'R$ 6.000'],
            ['title' => 'Fullstack Developer', 'salary' => 'R$ 9.000'],
            ['title' => 'Estagiário de TI', 'salary' => 'R$ 1.500'],
        ];

        foreach ($jobs as $job) {
             \App\Models\Job::factory()->create($job);
        }
    }
}
