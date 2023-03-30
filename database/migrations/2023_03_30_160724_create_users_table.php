<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
// use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("last_name");
            $table->string("email");
            $table->string("password");
            $table->date("birth_day");
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');     
            $table->timestamps();
        });
        DB::table('users')->insert([
            'name' => 'Juan Diego',
            'last_name'  => 'Mejia Maestre',
            'email'=> 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'birth_day' => '2001-07-31',
            'role_id' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
