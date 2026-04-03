<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::disk('public')->delete(Storage::disk('public')->allFiles());
        Storage::disk('public')->delete(Storage::disk('public')->allDirectories());


        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            ComponentSeeder::class,
        ]);
    }
}
