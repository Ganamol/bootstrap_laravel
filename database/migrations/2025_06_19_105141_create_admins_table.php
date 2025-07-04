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
        Schema::create('admins', function (Blueprint $table) {
           $table->bigIncrements('admin_id');
            $table->string('name',50);
             $table->string('email',50);
            $table->string('password',255);
            $table->date('dob');
            $table->boolean('status')->default(1)->comment('1:Active,0:Inactive');
             $table->string('type',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
