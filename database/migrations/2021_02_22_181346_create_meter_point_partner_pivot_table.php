<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeterPointPartnerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meter_point_partner', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meter_point_id')->index();
            $table->foreign('meter_point_id')->references('id')->on('meter_points')->onDelete('cascade');
            $table->unsignedBigInteger('partner_id')->index();
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meter_point_partner');
    }
}
