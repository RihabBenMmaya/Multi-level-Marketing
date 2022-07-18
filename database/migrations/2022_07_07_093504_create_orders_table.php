<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('advisor_id')->nullable();
            $table->integer('advisor_rank_id')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('parent_rank_id')->nullable();
            $table->decimal('total_value', $precision = 15, $scale = 3);
            $table->integer('paid')->default(0);
            $table->dateTime('paid_at')->nullable();
            $table->integer('fo')->default(0);


            $table->integer('parent_id')->nullable();

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
        Schema::dropIfExists('orders');
    }
};
