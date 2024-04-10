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
        Schema::table('trains', function (Blueprint $table) {
            $table->string("departure_station", 255);
            $table->string("arrival_station", 200);
            $table->time("departure_time");
            $table->time("arrival_time");
            $table->string("code", 30);
            $table->tinyInteger("carriage");
            $table->boolean("on_schedule");
            $table->boolean("cancelled");
            $table->date("departure_date");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn("departure_station");
            $table->dropColumn("arrival_station");
            $table->dropColumn("departure_time");
            $table->dropColumn("arrival_time");
            $table->dropColumn("code");
            $table->dropColumn("carriage");
            $table->dropColumn("on_schedule");
            $table->dropColumn("cancelled");
            $table->dropColumn("departure_date");
            
        });
    }
};
