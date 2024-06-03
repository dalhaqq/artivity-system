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
        Schema::table('print_orders', function (Blueprint $table) {
            $table->foreign('buyers_id', 'fk_print_orders_to_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_status_id', 'fk_print_orders_to_order_status')->references('id')->on('order_statuses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  Schema::table('print_orders', function (Blueprint $table) {
        //     $table->dropForeign('fk_print_orders_to_users');
        //     $table->dropForeign('fk_print_orders_to_order_status');
        // });
    }
};
