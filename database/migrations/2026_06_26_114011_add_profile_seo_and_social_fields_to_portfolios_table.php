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
            $table->string('job_title')->nullable()->after('name');
            $table->string('degree')->nullable()->after('web');
            $table->string('freelance_status')->nullable()->after('degree');
            $table->string('meta_title')->nullable()->after('banner');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->string('meta_keywords')->nullable()->after('meta_description');
            $table->string('linkedin_url')->nullable()->after('meta_keywords');
            $table->string('github_url')->nullable()->after('linkedin_url');
            $table->string('facebook_url')->nullable()->after('github_url');
            $table->string('instagram_url')->nullable()->after('facebook_url');
            $table->string('whatsapp_url')->nullable()->after('instagram_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn([
                'job_title',
                'degree',
                'freelance_status',
                'meta_title',
                'meta_description',
                'meta_keywords',
                'linkedin_url',
                'github_url',
                'facebook_url',
                'instagram_url',
                'whatsapp_url',
            ]);
        });
    }
};
