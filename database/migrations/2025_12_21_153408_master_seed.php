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
        $usersSeedValue = [
            [
            'name' => 'Ehfaz Adnan',
            'email' => 'ehfazadnan.cse@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => now()
            ]
        ];

        DB::table('users')->insert($usersSeedValue);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
