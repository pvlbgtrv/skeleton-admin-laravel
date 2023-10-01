<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Role::create(['name' => 'super_admin', 'view_name' => 'Super Admin']);
        Role::create(['name' => 'super_support', 'view_name' => 'Super Support']);
        Role::create(['name' => 'branch_admin', 'view_name' => 'Branch Admin']);
        Role::create(['name' => 'branch_support', 'view_name' => 'Branch Support']);
        Role::create(['name' => 'branch_carrier', 'view_name' => 'Carrier']);
        Role::create(['name' => 'buyer', 'view_name' => 'Buyer']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
