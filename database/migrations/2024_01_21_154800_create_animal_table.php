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
        Schema::create('animal', function (Blueprint $table) {
            $table->unique(['animal_name', 'classification']);


            $table->id();
            $table->string('animal_name');
            $table->enum('classification', ['Livestock', 'Poultry', 'Fishery', 'Pet', 'Insect']);
            // $table->string('type', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
