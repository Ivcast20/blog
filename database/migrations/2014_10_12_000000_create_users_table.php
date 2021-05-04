<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //integer unsigned increment
            $table->string('name'); //varchar(255) por defecto para más de 255 caract. se usa ->text('name')
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); //puede ser null
            $table->string('password');
            $table->rememberToken(); //crea una colunma varchar con tamaño 100, se usa para la opcion de recordar usuario
            $table->timestamps(); //created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
