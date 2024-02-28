<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Skill::truncate();

        $data = [
            [
                'name' => 'JavaScript',
                'icon' => 'https://img.icons8.com/color/48/000000/javascript--v1.png',
            ],
            [
                'name' => 'Java',
                'icon' => 'https://img.icons8.com/color/48/000000/java-coffee-cup-logo--v1.png',
            ],
            [
                'name' => 'PHP',
                'icon' => 'https://img.icons8.com/offices/48/000000/php-logo.png',
            ],
            [
                'name' => 'Python',
                'icon' => 'https://img.icons8.com/color/48/000000/python--v1.png',
            ],
            [
                'name' => 'C++',
                'icon' => 'https://img.icons8.com/color/48/000000/c-plus-plus-logo.png',
            ],
            [
                'name' => 'ReactJS',
                'icon' => 'https://img.icons8.com/external-tal-revivo-color-tal-revivo/48/000000/external-react-a-javascript-library-for-building-user-interfaces-logo-color-tal-revivo.png',
            ],
            [
                'name' => 'VueJS',
                'icon' => 'https://img.icons8.com/color/48/000000/vue-js.png',
            ],
            [
                'name' => 'ExpressJS',
                'icon' => 'https://img.icons8.com/fluency/48/000000/node-js.png',
            ],
            [
                'name' => 'NodeJS',
                'icon' => 'https://img.icons8.com/color/48/000000/nodejs.png',
            ],
            [
                'name' => 'Puppeteer',
                'icon' => 'https://user-images.githubusercontent.com/10379601/29446482-04f7036a-841f-11e7-9872-91d1fc2ea683.png',
            ],
            [
                'name' => 'jQuery',
                'icon' => 'https://img.icons8.com/ios-filled/48/1169ae/jquery.png',
            ],
            [
                'name' => 'Android',
                'icon' => 'https://img.icons8.com/fluency/48/000000/android-os.png',
            ],
            [
                'name' => 'ReactNative',
                'icon' => 'https://img.icons8.com/external-tal-revivo-color-tal-revivo/48/000000/external-react-a-javascript-library-for-building-user-interfaces-logo-color-tal-revivo.png',
            ],
            [
                'name' => 'HTML5',
                'icon' => 'https://img.icons8.com/color/48/000000/html-5--v1.png',
            ],
            [
                'name' => 'CSS3',
                'icon' => 'https://img.icons8.com/color/48/000000/css3.png',
            ],
            [
                'name' => 'Bootstrap',
                'icon' => 'https://img.icons8.com/color/48/000000/bootstrap.png',
            ],
            [
                'name' => 'Sass',
                'icon' => 'https://img.icons8.com/color/48/000000/sass.png',
            ],
            [
                'name' => 'MaterialUI',
                'icon' => 'https://img.icons8.com/color/48/000000/material-ui.png',
            ],
            [
                'name' => 'TailwindCSS',
                'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/48px-Tailwind_CSS_Logo.png',
            ],
            [
                'name' => 'MongoDB',
                'icon' => 'https://img.icons8.com/color/48/000000/mongodb.png',
            ],
            [
                'name' => 'MySQL',
                'icon' => 'https://img.icons8.com/color/48/000000/mysql-logo.png',
            ],
            [
                'name' => 'PostgreSQL',
                'icon' => 'https://img.icons8.com/color/48/000000/postgreesql.png',
            ],
            [
                'name' => 'Oracle XE',
                'icon' => 'https://www.oracle.com/a/ocom/img/xe.svg',
            ],
            [
                'name' => 'Firebase',
                'icon' => 'https://img.icons8.com/color/48/000000/firebase.png',
            ],
            [
                'name' => 'AWS',
                'icon' => 'https://img.icons8.com/color/48/000000/amazon-web-services.png',
            ],
            [
                'name' => 'Heroku',
                'icon' => 'https://img.icons8.com/color/48/000000/heroku.png',
            ],
            [
                'name' => 'Netlify',
                'icon' => 'https://img.icons8.com/external-tal-revivo-shadow-tal-revivo/48/000000/external-netlify-a-cloud-computing-company-that-offers-hosting-and-serverless-backend-services-for-static-websites-logo-shadow-tal-revivo.png',
            ],
            [
                'name' => 'Trello',
                'icon' => 'https://cdn-icons-png.flaticon.com/512/6124/6124991.png',
            ],
            [
                'name' => 'GitHub',
                'icon' => 'https://img.icons8.com/glyph-neue/48/ffffff/github.png',
            ],
            [
                'name' => 'WordPress',
                'icon' => 'https://img.icons8.com/color/48/000000/wordpress.png',
            ],
        ];

        foreach ($data as $value) {
            Skill::create($value);
        }

        Schema::enableForeignKeyConstraints();
    }
}
