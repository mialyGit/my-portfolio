<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Profile::truncate();

        Profile::create([
            'firstname' => 'Mialison',
            'name' => 'AVOTRINIAINA',
            'email' => 'avotriniainamialison1106@gmail.com',
            'address' => 'Ambatoroka Antananarivo',
            'phone_1' => '+261 34 95 681 80',
            'phone_2' => '+261 32 42 638 26',
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
