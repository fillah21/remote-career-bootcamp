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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('created_id')->nullable()->constrained('users');
            $table->foreignId('updated_id')->nullable()->constrained('users');
            $table->timestamp('deleted_at')->nullable();
            $table->foreignId('deleted_id')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['created_id']);
            $table->dropForeign(['updated_id']);
            $table->dropForeign(['deleted_id']);
            $table->dropColumn('created_id');
            $table->dropColumn('updated_id');
            $table->dropColumn('deleted_at');
            $table->dropColumn('deleted_id');
        });
    }
};
