<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('redirect_panels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')->unique()->nullable();
            $table->text('from_path')->nullable();
            $table->text('to_path')->nullable();
            $table->enum('type', [301,302,303,307])->default(301);
            $table->softDeletes();
            $table->timestamps();
        });
    }
};
