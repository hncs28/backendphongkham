<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->bigIncrements('commentID');
            $table->string('Name');
            $table->text('Comment');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        //
    }
};
