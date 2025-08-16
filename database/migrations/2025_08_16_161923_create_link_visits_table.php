<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('link_visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained()->cascadeOnDelete();
            $table->string('visitor_ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('referrer')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->enum('action_type', ['view', 'wishlist_click', 'paypal_click']);
            $table->timestamps();

            $table->index(['teacher_id', 'created_at']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('link_visits');
    }
};
