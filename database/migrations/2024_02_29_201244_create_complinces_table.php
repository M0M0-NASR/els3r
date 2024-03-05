<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complinces', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignId('product_id')->constrained('products');
            $table->string('full_name');
            $table->string('ssn', 14);
            $table->string('shop_name');
            $table->string('shop_address');
            $table->string('government');
            $table->string('content');
            $table->enum('status', ['معلقة', 'يتم النظر', 'تم الحل']);

            // Composite Unique Key
            $table->unique(['product_id', 'ssn']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complinces');
    }
};
