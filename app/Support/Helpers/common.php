<?php

use Illuminate\Support\Facades\Route;
use App\Models\Role;

if (!function_exists('flash')) {
    function flash(string $message, string $type = 'success'): void
    {
        session()->flash('type', $type);
        session()->flash('message', $message);
    }
}

if (!function_exists('active_link')) {
    function active_link(string $name, string $class = 'active'): string|null
    {
        if (is_string($name)) {
            $name = [$name];
        }
        
        return Route::is($name) ? $class : null;
    }
}

if (!function_exists('get_role_view_name')) {
    function get_role_view_name(string $name) {
        return Role::where('name', $name)->first()->view_name;
    }
}