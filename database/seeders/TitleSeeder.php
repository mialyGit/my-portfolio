<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Title::truncate();

        $data = [
            [
                'name' => 'Laravel Developer',
                'intro' => 'Experienced Laravel Developer with a passion for creating efficient and scalable web applications.',
            ],
            [
                'name' => 'Laravel Lead Developer',
                'intro' => 'Seasoned Laravel Lead Developer with a proven track record of leading development teams and delivering high-quality projects.',
            ],
            [
                'name' => 'Java/JEE Developer',
                'intro' => 'Dedicated Java/JEE Developer proficient in designing and implementing robust and maintainable enterprise-level applications.',
            ],
        ];

        foreach ($data as $value) {
            Title::create($value);
        }

        Schema::enableForeignKeyConstraints();
    }
}
