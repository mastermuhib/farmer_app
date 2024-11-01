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
        Schema::create('product_in_projects', function (Blueprint $table) {
            $table->id();
            $table->foreign('project_id')
                    ->references('id')
                    ->on('projects')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('product_id')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->float('start_price')->nullable();
            $table->float('start_weight')->default(0);
            $table->float('sale_price')->nullable();
            $table->float('end_weight')->nullable();
            $table->float('profit')->nullable();
            $table->text('notes')->nullable();
            $table->integer('status')->default(1);
            $table->date('deleted_at')->nullable();
            $table->timestamp('checked_at')->nullable();
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
        Schema::dropIfExists('product_in_projects');
    }
};
