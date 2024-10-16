<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->primary();
            $table->bigInteger('category_id')
                ->unsigned()
                ->nullable();
            $table->bigInteger('producer_id')
                ->unsigned()
                ->nullable();
            // $table->string('barecode', 13);
            $table->string('name', 255);
            $table->text('description')
                ->nullable();
            $table->string('image')
                ->nullable();
            // $table->string('qr_code')
            //     ->nullable();
            $table->decimal('price')
                ->default(0);
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

            $table->foreign('producer_id')
                ->references('id')
                ->on('producers');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
