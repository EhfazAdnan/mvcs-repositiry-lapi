<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Seed values for the users table.
     *
     * @var array
     */
    private array $usersSeedValue = [];

    /**
     * Constructor to initialize seed values.
     */
    public function __construct()
    {
        $this->usersSeedValue = [
            [
            'name' => 'Ehfaz Adnan',
            'email' => 'ehfazadnan.cse@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => now()
            ]
        ];
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert($this->usersSeedValue);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')->whereIn(
            'email',
            array_map(
                fn($user) => $user['email'], $this->usersSeedValue)
        )->delete();
    }
};
