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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('no_pemesanan');
            $table->foreignId('buyers_id')->nullable()->index('fk_orders_to_users');
            $table->foreignId('product_id')->nullable()->index('fk_orders_to_products');
            $table->foreignId('finishing_id')->nullable()->index('fk_orders_to_finishing');
            $table->foreignId('material_id')->nullable()->index('fk_orders_to_materials');
            $table->string('file_name');
            $table->string('bukti_pembayaran')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('order_status_id')->nullable()->index('fk_orders_to_order_status');
            $table->integer('jml_halaman');
            $table->integer('jml_sisi');
            $table->integer('jml_copy');
            $table->integer('price');
            $table->foreignId('metode_pembayaran_id')->nullable()->index('fk_orders_to_metode_pembayaran');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
};
