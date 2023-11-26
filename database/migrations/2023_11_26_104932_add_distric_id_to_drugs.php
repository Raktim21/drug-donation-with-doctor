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
        Schema::table('drugs', function (Blueprint $table) {
            $table->string('sku')->nullable()->after('id');
            $table->foreignId('district_id')->after('user_id')->nullable()->constrained('districts')->nullOnDelete();
            $table->string('address')->nullable()->after('district_id');
            $table->tinyInteger('status')->default(0)->comment('1=approved, 0=rejected')->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('drugs', function (Blueprint $table) {
            $table->dropForeign(['district_id']);
            $table->dropColumn('district_id');
            $table->dropColumn('address');
            $table->dropColumn('status');
            $table->dropColumn('sku');
        });
    }
};
