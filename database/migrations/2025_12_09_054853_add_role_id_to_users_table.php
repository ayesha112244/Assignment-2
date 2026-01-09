<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Adds a small integer column `role_id` to the users table.
     * role_id: 1 = Admin, 2 = Regular user
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add role_id with default 2 (regular user) so existing records won't break.
            $table->tinyInteger('role_id')->default(2)->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
        });
    }
};
