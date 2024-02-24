<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


	// Dalam file migrasi baru
public function up()
{
    Schema::table('attendances', function (Blueprint $table) {
        $table->foreignId('user_id')->constrained(); // Menunjukkan foreign key ke kolom id di tabel users
    });
}

public function down()
{
    Schema::table('attendances', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
    });
}


};
