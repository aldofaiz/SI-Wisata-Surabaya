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
        //
        Schema::table('reviews', function(Blueprint $table) {
            $table->unsignedBigInteger('location_id')->after('id');
            $table->index('location_id');
            $table->unsignedBigInteger('user_id')->after('id');
            $table->index('user_id');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
