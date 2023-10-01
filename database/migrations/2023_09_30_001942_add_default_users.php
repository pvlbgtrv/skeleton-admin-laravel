<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $super_admin = User::create([
            'username' => 'admin',
            'password' => 'password',
        ]);

        $super_admin->assignRole('super_admin');

        $super_support = User::create([
            'username' => 'super_support',
            'password' => 'password',
        ]);

        $super_support->assignRole('super_support');

        $branch_admin = User::create([
            'username' => 'branch_admin',
            'password' => 'password',
        ]);

        $branch_admin->assignRole('branch_admin');

        $branch_support = User::create([
            'username' => 'branch_support',
            'password' => 'password',
        ]);

        $branch_support->assignRole('branch_support');

        $branch_carrier = User::create([
            'username' => 'branch_carrier',
            'password' => 'password',
        ]);

        $branch_carrier->assignRole('branch_carrier');

        $buyer = User::create([
            'username' => 'buyer',
            'password' => 'password',
        ]);

        $buyer->assignRole('buyer');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
