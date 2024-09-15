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
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id_tickets');
            $table->string('user_id')->nullable();
            $table->string('title');
            $table->text('message');
            $table->string('id_label');
            $table->string('id_categories');
            $table->string('id_priorities');
            $table->string('status');
            $table->string('assign_user')->nullable();
            $table->text('attachment');
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};