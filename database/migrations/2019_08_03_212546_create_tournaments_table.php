<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('title', 100);
            $table->string('slug', 50)->unique();
            $table->string('image', 50);
            $table->mediumText('description');
            $table->timestamp('when');
            $table->boolean('public')->default(1);
            /*
            Possíveis Status:
               -1 = Cancelado
                0 = Concluído
                1 = Não Iniciado
                2 = Aguardando Início
                3 = Em Andamento
                4 = Pausado
            */
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
        // Schema::table('tournaments', function (Blueprint $table) {

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
}
