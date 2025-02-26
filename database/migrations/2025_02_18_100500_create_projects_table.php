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
        Schema::create('projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('portfolio_id')->unsigned();
            $table->bigInteger('project_category_id')->unsigned();
            $table->string('short_name');
            $table->smallInteger('placement')->nullable();
            $table->mediumText('project_intro');
            $table->boolean('status')->default(false);
            $table->timestamps();
            $table->foreign('portfolio_id')->references('id')->on('portfolios');
            $table->foreign('project_category_id')->references('id')->on('project_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
