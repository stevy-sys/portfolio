<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CommentaireSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(WorkSeeder::class);
        //$this->call(UserSeeder::class);
    }
}
