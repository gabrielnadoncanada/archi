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
        Schema::create('project_category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_post_id')->constrained('project_posts')->onDelete('cascade');
            $table->foreignId('project_category_id')->constrained('project_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_category_post');
    }
};
