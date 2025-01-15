<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('subscription');
            $table->decimal('price');
            $table->date('date');
            $table->unsignedTinyInteger('frequency'); // 1: harian, 2: mingguan, 3: bulanan, 4: tahunan
            $table->string('payment_method');
            $table->text('note');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
