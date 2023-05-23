<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('expire_date');
            $table->string('cc');
            $table->string('cvv');
            $table->string('full_name');
            $table->string('product_id');
            $table->integer('total');
            $table->timestamps();


        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
