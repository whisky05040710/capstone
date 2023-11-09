<?php

namespace App\Http\Controllers;

use App\Models\StaffUsers;
use App\Models\User;
use App\Http\Requests\StoreStaffUsersRequest;
use App\Http\Requests\UpdateStaffUsersRequest;

class StaffUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("staffUsersAdd");
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
    public function store(StoreStaffUsersRequest $request)
    {
        $validatedData = $request->validated();

        $imagePath = $validatedData['profile']->store('profile','public');

        $user = new User();
        $user->fill([
            'email' => $validatedData['email'],
            'password'=> bcrypt($validatedData['password']),
        ]);
        $user->save();

        $user_id = $user->id;


        StaffUsers::create([
            'user_id'=> $user_id,
            'firstname' => $validatedData['firstname'],
            'lastname'=> $validatedData['lastname'],
            'role' => $validatedData['role'],
            'profile' => $imagePath,
            ]);
            alert()->success('success','Staff Account have been created');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(StaffUsers $staffUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StaffUsers $staffUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffUsersRequest $request, StaffUsers $staffUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StaffUsers $staffUsers)
    {
        //
    }
}
