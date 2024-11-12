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
        Schema::create('image_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')
                    ->references('id')
                    ->on('schedules')
                    ->onDelete(null)
                    ->onUpdate('cascade');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('file')->nullable();
            $table->text('notes')->nullable();
            $table->float('weight')->nullable();
            $table->enum('type',['foto','video'])->default('foto');
            $table->integer('status')->default(1);
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('image_schedules');
    }
};
