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
        Schema::create('rodados', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->nullable();
            $table->string('modelo')->nullable();
            $table->string('rodado')->nullable();
            $table->string('detalle')->nullable();
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id')->references('id')->on('proveedors')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rodados');
    }
};
