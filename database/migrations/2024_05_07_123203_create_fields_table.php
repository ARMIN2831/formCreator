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
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('value')->nullable()->default('Title of the field');
            $table->string('placeholder')->nullable()->default('Placeholder of the field');
            $table->boolean('required')->default(0);
            $table->boolean('unique')->default(0);
            //$table->text('options')->nullable();
            $table->integer('min')->nullable()->default(0);
            $table->integer('max')->nullable()->default(0);
            $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
