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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('hash')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('resourceable_type');
            $table->unsignedBigInteger('resourceable_id');
            $table->unsignedBigInteger('creator_id')->nullable()->onDelete('null');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
