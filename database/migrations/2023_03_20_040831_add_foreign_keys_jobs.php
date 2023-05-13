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
        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('order_id', 'fk_jobs_to_orders')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_job_id', 'fk_jobs_to_status_job')->references('id')->on('job_status')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign('fk_jobs_to_orders');
            $table->dropForeign('fk_jobs_to_status_job');
        });
    }
};
