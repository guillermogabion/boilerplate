<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('item_name');
            $table->string('item_code')->nullable();
            $table->string('type');
            $table->string('batch_no');
            $table->string('location');
            $table->string('branch')->nullable();
            $table->integer('quantity')->default(0);
            $table->decimal('price', 8, 2)->default(0.00);
            $table->string('status')->default('active');
            $table->string('expiry')->nullable();
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
        Schema::dropIfExists('warehouses');
    }
}
