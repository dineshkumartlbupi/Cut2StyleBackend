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
        Schema::table('products', function (Blueprint $table) {
            // Check if 'user_id' does not exist before adding it
            if (!Schema::hasColumn('products', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable(); // Add column
            } else {
                $table->unsignedBigInteger('user_id')->nullable()->change(); // Modify existing column
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
