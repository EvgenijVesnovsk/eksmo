<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookStatusTransitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_status_transitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_id')->comment('Из статуса');
            $table->unsignedBigInteger('to_id')->comment('В статус');
            $table->timestamps();
            $table->foreign('from_id')->on('book_statuses')->references('id')->onDelete('cascade');
            $table->foreign('to_id')->on('book_statuses')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_status_transitions', function (Blueprint $table) {
            $table->dropForeign('book_status_transitions_from_id_foreign');
            $table->dropForeign('book_status_transitions_to_id_foreign');
        });

        Schema::dropIfExists('book_status_transitions');
    }
}
