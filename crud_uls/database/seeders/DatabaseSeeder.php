<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\News;
use \App\Models\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        News::factory(100)->create();
        Author::factory(10)->create();
    }
}
