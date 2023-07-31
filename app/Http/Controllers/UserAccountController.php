<?php

namespace App\Http\Controllers;

use App\Models\user_account;
use App\Http\Requests\Storeuser_accountRequest;
use App\Http\Requests\Updateuser_accountRequest;

class UserAccountController extends Controller
{

    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeuser_accountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(user_account $user_account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user_account $user_account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateuser_accountRequest $request, user_account $user_account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user_account $user_account)
    {
        //
    }
}
