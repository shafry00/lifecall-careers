<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_out', function (Blueprint $table) {
            $table->increments('id_stok_out');
            $table->integer('id_pegawai')->unsigned()->nullable();
            $table->string('no_stok_out', 25)->unique()->nullable();
            $table->text('by')->nullable();
            $table->date('date')->nullable();
            $table->text('objective')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_out');
    }
}
