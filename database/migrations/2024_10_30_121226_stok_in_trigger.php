<?php

use Illuminate\Database\Migrations\Migration;

class StokInTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER stok_in AFTER INSERT ON `stok_in_detail` FOR EACH ROW BEGIN UPDATE barang SET stock = stock + NEW.qty WHERE id_barang = NEW.id_barang; END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `stok_in`');
    }
}
