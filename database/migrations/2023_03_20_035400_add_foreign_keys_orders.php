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
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('buyers_id', 'fk_orders_to_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('product_id', 'fk_orders_to_products')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('finishing_id', 'fk_orders_to_finishing')->references('id')->on('finishing')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('material_id', 'fk_orders_to_materials')->references('id')->on('stocks')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('order_status_id', 'fk_orders_to_order_status')->references('id')->on('order_statuses')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('metode_pembayaran_id', 'fk_orders_to_metode_pembayaran')->references('id')->on('metode_pembayaran')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('fk_orders_to_users');
            $table->dropForeign('fk_orders_to_products');
            $table->dropForeign('fk_orders_to_finishing');
            $table->dropForeign('fk_orders_to_materials');
            $table->dropForeign('fk_orders_to_order_status');
            $table->dropForeign('fk_orders_to_metode_pembayaran');
        });
    }
};
