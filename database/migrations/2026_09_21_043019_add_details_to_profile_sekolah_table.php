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
        Schema::table('profile_sekolah', function (Blueprint $table) {
            //

             $table->string('principal')->nullable()->after('npsn');
             $table->string('website')->nullable()->after('email');
             $table->string('logo')->nullable()->after('descriptin');
             $table->string('school_photo')->nullable()->after('npsn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile_sekolah', function (Blueprint $table) {
            //
        });
    }
};
