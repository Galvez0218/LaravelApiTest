<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Public\DocumentTypeSeeder;
use Database\Seeders\Public\PeopleSeeder;
use Database\Seeders\Public\UserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Src\Auth\Infrastructure\Persistances\Eloquent\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DocumentTypeSeeder::class,
            PeopleSeeder::class,
            UserSeeder::class
        ]);
        // User::factory(10)->create();

        // User::updateOrInsert(
        //     ['id' => 1],
        //     fn($exists) => $exists ?
        //         [
        //             // 'username' => 'admin',
        //             // 'email' => 'admin@admin.com',
        //             // 'password' => static::$password ??= Hash::make('password'),
        //         ] : [
        //             'username' => 'admin',
        //             'email' => 'admin@admin.com',
        //             'password' => Hash::make('password'),
        //         ],
        // );
        // create([
        //     'username' => 'admin',
        //     'email' => 'admin@admin.com',
        // ]);
    }
}
