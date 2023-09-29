<?php

if (!function_exists('flash')) {
    function flash(string $message, string $type = 'success'): void
    {
        session()->flash('type', $type);
        session()->flash('message', $message);
    }
}