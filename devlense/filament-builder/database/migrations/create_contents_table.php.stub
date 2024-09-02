<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
      Schema::create(config('filament-builder.table_name', 'contents'), function (Blueprint $table) {
            $table->id();
            $table->unique(['contentable_id', 'contentable_type']);
            $table->text('content');
            $table->integer('contentable_id');
            $table->string('contentable_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(config('filament-builder.table_name', 'contents'));
    }
};
