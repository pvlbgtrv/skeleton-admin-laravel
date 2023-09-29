<?php

use Illuminate\Support\Facades\Route;

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