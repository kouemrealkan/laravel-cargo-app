<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cargo_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('email');
            $table->string('message',1000);
            $table->string('track_code',15);
            $table->string('status')->default('İlgili yetkililere aktarıldı. Yanıt Bekleniyor');
            $table->string('admin_response',1000)->nullable();
            $table->foreign('cargo_id')->references('id')->on('cargo_transits')->onDelete('cascade');
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
        Schema::dropIfExists('contact_forms');
    }
}
