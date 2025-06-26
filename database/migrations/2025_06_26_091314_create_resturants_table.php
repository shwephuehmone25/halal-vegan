<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('type', 100)->nullable();
            $table->string('phone_number', 20)->unique();
            $table->string('address')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('website')->nullable();
            $table->unsignedInteger('sort_id')->default(0)->index();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
