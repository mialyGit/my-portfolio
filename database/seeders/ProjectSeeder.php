<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Project::truncate();

        $data = [
            [
                'name' => 'La Beauté Française',
                'preview' => 'https://www.labeautefrancaise.com/',
            ],
            [
                'name' => 'Ryl Adduction',
                'preview' => 'https://ryladduction.com/',
            ],
            [
                'name' => 'C-REFLEX',
            ],
            [
                'name' => 'Winehubpro',
            ],
            [
                'name' => 'Portail DGI',
            ],
            [
                'name' => 'Bésoins matériels',
            ],
        ];

        foreach ($data as $value) {
            Project::create($value);
        }

        Schema::enableForeignKeyConstraints();
    }
}
