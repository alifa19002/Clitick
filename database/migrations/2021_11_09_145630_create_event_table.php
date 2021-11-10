<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('nama_event', 25);
            $table->char('institusi penyelenggara', 30);
            $table->date('tgl_event');
            $table->char('status_event', 15);
            $table->char('deskripsi_event', 200);
            $table->foreignId('id_kategori')->constrained('kategori');
            $table->foreignId('id_domisili')->constrained('domisili');
            $table->foreignId('id_user')->constrained('user');
        });
        DB::statement("ALTER TABLE event ADD poster_event LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
