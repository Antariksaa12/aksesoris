<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->string('produk')->constraines('produks');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
