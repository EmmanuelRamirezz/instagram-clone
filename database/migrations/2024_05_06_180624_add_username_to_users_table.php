<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void//ocurre al ejecutar una migracion
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('username')->unique();//comprueba que este campo sea unico en la bd
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //ocurre al hacer un rollback
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('username');
        });
    }
};
