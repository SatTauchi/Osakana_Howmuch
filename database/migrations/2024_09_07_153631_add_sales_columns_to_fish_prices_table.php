<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('fish_prices', function (Blueprint $table) {
            $table->decimal('selling_price', 10, 2)->nullable()->after('price');
            $table->integer('quantity_sold')->nullable()->after('selling_price');
        });
    }

    public function down()
    {
        Schema::table('fish_prices', function (Blueprint $table) {
            $table->dropColumn(['selling_price', 'quantity_sold']);
        });
    }
};