<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // `id` kolom dengan tipe `varchar`
            $table->bigInteger('user_id')->nullable(); // `user_id` kolom dengan tipe `bigint`
            $table->string('ip_address')->nullable(); // `ip_address` kolom dengan tipe `varchar`
            $table->text('user_agent')->nullable(); // `user_agent` kolom dengan tipe `text`
            $table->longText('payload'); // `payload` kolom dengan tipe `longtext`
            $table->integer('last_activity'); // `last_activity` kolom dengan tipe `int`
            $table->timestamps(); // Kolom untuk created_at dan updated_at jika diperlukan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
