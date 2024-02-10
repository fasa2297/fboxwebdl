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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_category_id'); //karena akan dijadikan relational dengan table product category
            $table->string('name');
            $table->text('description');
            // $table->integer('price');
            // $table->string('image');
            $table->timestamps();
        });
    }

    /**
    *📝(19,20)changes & add -> $php artisan make:migration add_price_and_image_on_table_products --table=products
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
