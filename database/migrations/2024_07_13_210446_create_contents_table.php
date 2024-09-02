<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(config('filament-builder.content_table_name', 'contents'), function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->morphs('contentable');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(config('filament-builder.content_table_name', 'contents'));
    }
};
