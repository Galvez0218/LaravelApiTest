<?php

namespace Database\Seeders\Public;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                    'name' => 'DNI',
                ],
        );
    }
}
