<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(?string $role = null)
    {
        $users = [];

        if($role === null) {

            $users = User::orderByDesc('id')->get();
            $role_view_name = 'Все пользователи';

        } elseif(in_array($role, Role::all()->pluck('name')->toArray())) {

            $users = User::orderByDesc('id')->role($role)->get();
            $role_view_name = Role::where('name', $role)->first()->view_name;
        } else {
            abort(403);
        }

        return view('users/all', compact('users', 'role_view_name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();

        return view('users/create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|alpha_dash:ascii|unique:users|min:3|max:100',
            'password' => 'required|confirmed|min:8',
            'role' => 'required|alpha_dash:ascii',
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => $request->password,
        ]);

        if($user && $user->assignRole($request->role)) {
            flash("Пользователь успешно создан<br><br>Имя пользователя: $request->username<br>Пароль: $request->password", 'success');
        } else {
            flash("Не удалось создать пользователя", 'danger');
        }

        return redirect()->route('users.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
