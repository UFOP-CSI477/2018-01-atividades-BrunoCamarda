<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableOnAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
          $table->Integer('numero')->nullable()->change();
          $table->integer('numero')->nullable()->change();
          $table->string('bairro', 100)->nullable()->change();
          $table->string('cep', 8)->nullable()->change();
          $table->string('mail', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            //
        });
    }
}
