<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifKlien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notif_klien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',65);
            $table->string('email')->nullable();
            $table->string('domain',120);
            $table->string('phone_number',30)->nullable();
            $table->text('address')->nullable();
            $table->string('judul_notif')->nullable();
            $table->integer('tgl_notif')->default(1);
            $table->text('notif')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('serial',120)->unique();
            $table->date('expired')->nullable();
            $table->timestamp('date')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('notif_klien');
    }
}
