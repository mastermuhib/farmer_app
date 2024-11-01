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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->foreign('owner_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('slug')->nullable();
            $table->string('icon')->nullable();
            $table->string('company_profile')->nullable();
            $table->string('number_identity')->nullable();
            $table->foreign('city_id')
                    ->references('id')
                    ->on('cities')
                    ->onDelete(null)
                    ->onUpdate('cascade');
            $table->text('description')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
