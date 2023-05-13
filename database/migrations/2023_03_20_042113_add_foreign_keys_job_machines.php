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
        Schema::table('job_machines', function (Blueprint $table) {
            $table->foreign('job_id', 'fk_job_machines_to_jobs')->references('id')->on('jobs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mesin_id', 'fk_job_machines_to_machines')->references('id')->on('machines')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_machines', function (Blueprint $table) {
            $table->dropForeign('fk_job_machines_to_jobs');
            $table->dropForeign('fk_job_machines_to_machines');
        });
    }
};
