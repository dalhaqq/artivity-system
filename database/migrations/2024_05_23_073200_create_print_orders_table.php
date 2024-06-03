<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_orders', function (Blueprint $table) {
            $table->id();
            $table->string('no_pemesanan');
            $table->foreignId('buyers_id')->nullable()->index('fk_print_orders_to_users');
            $table->foreignId('order_status_id')->nullable()->index('fk_print_orders_to_order_status');
            $table->string('jenis_kertas', 5);
            $table->string('jenis_cetak', 15);
            $table->integer('jml_copy');
            $table->integer('jml_halaman');
            $table->boolean('two_side')->default(false);
            $table->string('file');
            $table->integer('harga');
            $table->string('bukti_bayar');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('print_orders');
    }
};
