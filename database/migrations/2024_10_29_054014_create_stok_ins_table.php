<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_in', function (Blueprint $table) {
            $table->increments('id_stok_in');
            $table->string('no_stok_in', 25)->unique()->nullable();
            $table->text('by')->nullable();
            $table->date('date')->nullable();
            $table->text('description')->nullable();
            $table->binary('attachment')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_in');
    }
}
