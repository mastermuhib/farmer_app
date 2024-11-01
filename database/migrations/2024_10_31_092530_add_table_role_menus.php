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
        Schema::create('role_menus', function (Blueprint $table) {
            $table->id();
            $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->onDelete(null)
                    ->onUpdate('cascade');
            $table->foreign('menu_id')
                    ->references('id')
                    ->on('menus')
                    ->onDelete(null)
                    ->onUpdate('cascade');
            $table->integer('is_view')->default(1);
            $table->integer('is_add')->default(0);
            $table->integer('is_edit')->default(0);
            $table->integer('is_delete')->default(0);
            $table->integer('status')->default(1);
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
