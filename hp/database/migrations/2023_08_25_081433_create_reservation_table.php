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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("pronunciation");
            $table->integer("age");
            $table->integer("post_code");
            $table->string("address");
            $table->integer("man_num");
            $table->integer("woman_num");
            $table->integer("child_num");
            $table->date("date");
            $table->integer("stay_length");
            $table->boolean("private_room_request");
            $table->integer("call_num");
            $table->string("e_mail");
            $table->integer("transpotation");
            $table->string("arrival_time",10);
            $table->integer("how_found");
            $table->string("others", 500)->nullable(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
};
