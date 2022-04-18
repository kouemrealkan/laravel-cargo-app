<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoTransitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_transits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('email');
            $table->string('service_type');
            $table->string('move_from');
            $table->string('move_to');
            $table->string('move_to_address');
            $table->string('ship_to');
            $table->string('ship_to_phone_number');
            $table->string('ship_address');
            $table->integer('cargo_track_number')->nullable();
            $table->string('transit_status')->default('Çağrı Alındı');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('cargo_transits');
    }
}
