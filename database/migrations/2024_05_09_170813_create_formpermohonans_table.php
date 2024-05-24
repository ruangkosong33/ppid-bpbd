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
        Schema::create('formpermohonans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('katdip_id')->references('id')->on('katdips');
            $table->string('alamat');
            $table->string('email');
            $table->string('phone');
            $table->string('pekerjaan');
            $table->longText('rincian');
            $table->longText('tujuan');
            $table->enum('memperoleh', [1,2,3,4]);
            $table->enum('mendapatkan', [1,2]);
            $table->enum('salinan', [1,2,3]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formpermohonans');
    }
};
