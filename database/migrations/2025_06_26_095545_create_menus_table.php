<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id')
                ->constrained('restaurants')
                ->onDelete('cascade');
            $table->string('name', 150);
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->boolean('is_available')->default(true);
            $table->unsignedInteger('sort_id')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
}
