<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Folder;
use App\Models\Category;
use App\Models\Note;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            // your seeders go here
            UserSeeder::class,
            CategorySeeder::class,
        ]);

        // and here your factories
        Folder::factory(10)->create();
        Note::factory(100)->create();
    }
}