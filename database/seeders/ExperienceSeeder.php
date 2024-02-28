<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Experience::truncate();

        $formations = [
            [
                'name' => 'Computer engineering degree',
                'address' => 'Ecole Nationale d\'Informatique',
                'description' => '',
                'between' => '2022',
                'is_formation' => true,
            ],
            [
                'name' => 'Bachelor degree',
                'address' => 'Lycée RAHERIVELO RAMAMONJY',
                'description' => 'Mention: Honor',
                'between' => '2016',
                'is_formation' => true,
            ],
            [
                'name' => 'Application development and architecture training',
                'address' => 'TECHZARA Antananarivo',
                'description' => '',
                'between' => '2022',
                'is_formation' => true,
            ],
        ];

        $experiences = [
            [
                'name' => 'Laravel Lead Developer',
                'address' => 'Genuis At work',
                'description' => 'Supervised and led a team of developers for the "ryladdcution" project related to education, training, and hydraulic equipment services. <br>
                                  Utilized Trello as the project management tool. <br>
                                  Controlled and conducted quality testing using Larastan/PHPUnit/Feature Test. <br>
                                  Deployed the project using CI/CD with GitLab. <br>
                                  Application link: https://ryladduction.com/',
                'between' => 'July 2023 - now',
            ],
            [
                'name' => 'Laravel Developer',
                'address' => 'Genuis At work',
                'description' => 'Developed a B2B Marketplace platform based on Laravel and Nuxt JS. <br> 
                                  Designed and developed a RESTful API based on SOLID principles.<br> 
                                  Handled online payments using Lemonway. <br>
                                  Utilized a MySQL database.<br> 
                                  Managed media with Laravel Media Library.<br> Designed complex database schemas using Draw SQL.<br>
                                  Application link: https://www.labeautefrancaise.com/',
                'between' => 'September 2022 - July 2023',
            ],
            [
                'name' => 'Application development and architecture training',
                'address' => 'General Management of taxes',
                'description' => 'Developed an application for taxpayer management using Spring Boot. <br>
                                  Implemented an MVC architecture. <br>
                                  Used Thymeleaf as a template generator. <br>
                                  Utilized UML modeling with Visual Paradigm using the 2TUP method. <br>
                                  Implemented the Hibernate ORM using the JPA interface.  <br>
                                  Managed the database with PostgreSQL',
                'between' => 'Juny 2022 - September 2022',
            ],
            [
                'name' => 'Application development and architecture training',
                'address' => 'General Management of taxes',
                'description' => 'Developed an application for taxpayer management using Spring Boot. <br>
                                  Implemented an MVC architecture. <br>
                                  Used Thymeleaf as a template generator. <br>
                                  Utilized UML modeling with Visual Paradigm using the 2TUP method. <br>
                                  Implemented the Hibernate ORM using the JPA interface.  <br>
                                  Managed the database with PostgreSQL',
                'between' => 'June 2022 - September 2022',
            ],
            [
                'name' => 'Data Scrapper',
                'address' => 'Client Project',
                'description' => 'Developed a script using the Puppeteer JavaScript library to extract information from a website. <br>
                                  Implemented an automated program to regularly retrieve data from multiple sources using scripts. <br> 
                                  Processed and cleaned the retrieved data for statistical analysis. <br>
                                  Used techniques for identifying and extracting data from complex web pages.',
                'between' => 'January 2020 - June 2021',
            ],
            [
                'name' => 'Java EE Developer',
                'address' => 'Caisse d\'Epargne de Madagascar',
                'description' => 'Designed and developed an application for material needs management using Java EE and Oracle XE for data management. <br>
                                  Implemented a system for tracking the movements of materials between different agencies.  <br>
                                  Web application based on an MVC architecture. <br>
                                  Participated in the project following the Unified Process (UP) methodology.',
                'between' => 'September 2019 - January 2020',
            ],
        ];

        $data = array_merge($formations, $experiences);

        foreach ($data as $value) {
            Experience::create($value);
        }

        Schema::enableForeignKeyConstraints();
    }
}
