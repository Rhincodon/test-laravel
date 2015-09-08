<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();

        if (Request::wantsJson()) {
            return $users;
        } else {
            return view('user.index', compact('users'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = new User();

        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserRequest  $request
     * @param  User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $user)
    {
        $user->create($request->all());

        if (Request::wantsJson()) {
            return $user;
        } else {
            return redirect('admin/user');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\View\View
     */
    public function show(User $user)
    {
        if (Request::wantsJson()) {
            return $user;
        } else {
            return view('user.show', compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserRequest  $request
     * @param  User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());

        if (Request::wantsJson()) {
            return $user;
        } else {
            return redirect('admin/user');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $deleted = $user->delete();

        if (Request::wantsJson()) {
            return (string) $deleted;
        } else {
            return redirect('admin/user');
        }
    }
}
