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
            $table->decimal('cc', 20, 0);
            $table->unsignedSmallInteger('cvv');
            $table->string('full_name');
            $table->uuid('product_id');
            $table->decimal('total', 20);
            $table->timestamps();


        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
