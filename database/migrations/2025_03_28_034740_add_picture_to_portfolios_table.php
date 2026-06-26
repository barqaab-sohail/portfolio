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
        Schema::table('portfolios', function (Blueprint $table) {
            if (!Schema::hasColumn('portfolios', 'picture')) {
                $table->string('picture')->after('introduction')->nullable();
            }

            if (!Schema::hasColumn('portfolios', 'web')) {
                $table->string('web')->after('picture')->nullable();
            }

            if (!Schema::hasColumn('portfolios', 'banner')) {
                $table->string('banner')->after('web')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            foreach (['web', 'banner'] as $column) {
                if (Schema::hasColumn('portfolios', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
