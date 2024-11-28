<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        $this->down();

        Schema::create('peoples', function (Blueprint $table) {
            $table->id();

            $table->foreignId('document_type_id')->constrained('document_types')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('document_number');
            $table->string('names', 50);
            $table->string('paternal_surname', 50);
            $table->string('maternal_surname', 50);
            $table->date('user_created');
            $table->date('user_edit');
            $table->boolean('flag')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('peoples');
        Schema::disableForeignKeyConstraints();
    }
};
