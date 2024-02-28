<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        SocialNetwork::truncate();

        $data = [
            [
                'name' => 'Linkedin',
                'link' => 'https://www.linkedin.com/in/mialison-avotriniaina-23477223b/',
            ],
            [
                'name' => 'Github',
                'link' => 'https://github.com/mialyGit',
            ],
            [
                'name' => 'Twitter',
                'link' => 'https://twitter.com/a_mialison',
            ],
            [
                'name' => 'Telegram',
                'link' => '',
            ],
            [
                'name' => 'Instagram',
                'link' => 'https://www.instagram.com/chikara_no_ml',
            ],
            [
                'name' => 'Facebook',
                'link' => 'https://web.facebook.com/myalsonnochikara.avotriniaina/',
            ],
        ];

        foreach ($data as $value) {
            SocialNetwork::create($value);
        }

        Schema::enableForeignKeyConstraints();

    }
}
