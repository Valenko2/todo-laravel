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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->integer('hard');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();
            $table->index('category_id', 'task_category_idx');
            $table->foreign('category_id', 'task_category_fk')->on('categories')->references('id');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
