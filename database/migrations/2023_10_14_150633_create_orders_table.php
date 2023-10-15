<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bnb_id')->index()->comment('旅宿ID');
            $table->integer('room_id')->index()->comment('房間ID');
            $table->char('currency',3)->comment('付款幣別');
            $table->decimal('amount', 12, 2)->default(0)->comment('訂單金額');
            $table->date('check_in_date')->comment('入住日');
            $table->date('check_out_date')->comment('退房日');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
