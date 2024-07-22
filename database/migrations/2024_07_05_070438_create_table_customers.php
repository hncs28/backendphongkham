<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customerID');
            $table->string('customerName');
            $table->date('dob');
            $table->string('customerUsername');
            $table->string('customerPassword');
            $table->string('customerEmail');
            $table->string('customerAddress');
            $table->string('customerPhone');
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
