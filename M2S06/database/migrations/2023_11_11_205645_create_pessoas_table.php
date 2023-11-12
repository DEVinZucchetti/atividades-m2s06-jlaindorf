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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('cdf', 20)->nullable();
            $table->string('contact', 20)->nullable();
            $table->timestamps();
            $table->renameColumn('cdf', 'cpf');
            $table->unique('cpf');
        });

    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
