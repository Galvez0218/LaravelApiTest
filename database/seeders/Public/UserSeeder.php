<?php

namespace Database\Seeders\Public;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Src\Core\Users\Infrastructure\Persistances\Eloquent\Models\UserModel;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        UserModel::updateOrInsert(
            ['id' => 1],
            fn($exists) => $exists ?
                [
                    // 'username' => 'admin',
                    // 'email' => 'admin@admin.com',
                    // 'password' => static::$password ??= Hash::make('password'),
                ] : [
                    'people_id' => 1,
                    'username' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('password'),
                ],
        );
        // create([
        //     'username' => 'admin',
        //     'email' => 'admin@admin.com',
        // ]);
    }
}
