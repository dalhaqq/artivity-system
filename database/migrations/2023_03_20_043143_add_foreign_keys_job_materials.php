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
        Schema::table('job_materials', function (Blueprint $table) {
            $table->foreign('job_id', 'fk_job_materials_to_jobs')->references('id')->on('jobs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('stock_id', 'fk_job_materials_to_stocks')->references('id')->on('stocks')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_materials', function (Blueprint $table) {
            $table->dropForeign('fk_job_materials_to_jobs');
            $table->dropForeign('fk_job_materials_to_stocks');
        });
    }
};
