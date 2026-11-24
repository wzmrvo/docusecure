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
        Schema::table('document_categories', function (Blueprint $table) {
            $table->string('access_tier')->nullable()->after('slug');
            $table->foreignId('department_id')->nullable()->after('access_tier')->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('document_categories', function (Blueprint $table) {
            $table->dropConstrainedForeignId('department_id');
            $table->dropColumn('access_tier');
        });
    }
};
