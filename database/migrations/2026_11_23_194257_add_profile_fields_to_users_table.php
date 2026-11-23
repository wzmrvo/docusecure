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
            $table->string('identification_number')->nullable()->unique()->after('email');
            $table->string('phone')->nullable()->after('identification_number');
            $table->string('college')->nullable()->after('phone');
            $table->string('clearance_tier')->default('tier1')->after('role');
            $table->string('account_status')->default('active')->after('clearance_tier');
            $table->foreignId('department_id')->nullable()->after('account_status')->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['department_id']);
            $table->dropColumn([
                'identification_number',
                'phone',
                'college',
                'clearance_tier',
                'account_status',
                'department_id',
            ]);
        });
    }
};
