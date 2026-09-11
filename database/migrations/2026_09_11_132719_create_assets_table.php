<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('title')->index();
            $table->string('slug')->unique()->index();
            $table->text('description')->nullable();
            $table->string('software')->default('Blender / Maya')->index();
            $table->string('file_format')->default('.fbx');
            $table->string('filesize')->nullable();
            $table->string('preview_image')->nullable();
            $table->unsignedInteger('download_count')->default(0);
            $table->decimal('rating', 3, 1)->default(4.9);
            $table->boolean('is_featured')->default(false);
            $table->json('tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
};
