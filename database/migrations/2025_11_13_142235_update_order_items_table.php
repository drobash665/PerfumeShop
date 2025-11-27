<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {

            $table->dropForeign(['fragrance_id']);
            $table->foreign('fragrance_id')
                ->references('id')
                ->on('fragrances')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign(['fragrance_id']);
            $table->foreign('fragrance_id')
                ->references('id')
                ->on('fragrances');
        });
    }
};
