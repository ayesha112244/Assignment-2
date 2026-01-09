<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->string('language')->nullable();
            $table->string('capital')->nullable();
            $table->string('currency')->nullable();
            $table->string('population')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'language',
                'capital',
                'currency',
                'population',
            ]);
        });
    }
};
