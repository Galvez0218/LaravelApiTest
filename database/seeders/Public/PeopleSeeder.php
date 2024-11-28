<?php

namespace Database\Seeders\Public;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('peoples')->updateOrInsert(
            ['id' => 1],
            fn($exists) => $exists ?
                [
                    // 'username' => 'admin',
                    // 'email' => 'admin@admin.com',
                    // 'password' => static::$password ??= Hash::make('password'),
                ] : [
                    'document_type_id' => 1,
                    'document_number' => '70040128',
                    'names' => 'ALVINA',
                    'paternal_surname' => 'GALVEZ',
                    'maternal_surname' => 'TAIPEE',
                ],
        );
    }
}
