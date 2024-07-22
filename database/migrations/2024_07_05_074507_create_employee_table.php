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
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('employeeID');
            $table->string('employeeName');
            $table->string('employeeRole');
            $table->string('employeePhone');
            $table->string('employeeEmail');
            $table->text('employeeExper');
            $table->binary('emplyeeImg');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
