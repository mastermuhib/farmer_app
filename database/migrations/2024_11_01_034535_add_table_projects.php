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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->foreign('company_id')
                    ->references('id')
                    ->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('slug')->nullable();
            $table->string('thumbnail')->nullable();
            $table->float('budget')->nullable();
            $table->float('progress')->default(0);
            $table->float('percentage_owner')->nullable();
            $table->float('percentage_admin')->nullable();
            $table->float('percentage_investor')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->date('deleted_at')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('estimation_date')->nullable();
            $table->timestamp('finished_at')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
