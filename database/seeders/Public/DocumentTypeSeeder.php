<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('document_types')->updateOrInsert(
            ['id' => 1],
            fn($exists) => $exists ?
                [] : [
                    'username' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('password'),
                ],
        );
    }
}
