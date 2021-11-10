<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('email', 25)->unique();
            $table->char('nama_user', 25);
            $table->char('username', 25);
            $table->char('password', 12);
            $table->char('no_telp', 14);
            $table->char('jk', 1);
            $table->text('alamat');
            // $table->binary('foto_profil');
        });
        
        DB::statement("ALTER TABLE user ADD foto_profil LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
