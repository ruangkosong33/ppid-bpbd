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
        Schema::create('formpengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('email');
            $table->string('ktp');
            $table->string('phone');
            $table->string('alamat');
            $table->longText('rincian');
            $table->longText('keterangan');
            $table->enum('salinan', [1,2,3,4,5,6,7]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formpengajuans');
    }
};
