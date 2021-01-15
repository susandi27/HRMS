<?php

namespace App\Http\Controllers;

use App\Leaverequest;
use Illuminate\Http\Request;
use App\Department;
use App\User;
use App\Staffinfo;

class LeaverequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.leave_requests.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $departments = Department::all();
        return view('backend.leave_requests.create', compact('users', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leaverequest  $leaverequest
     * @return \Illuminate\Http\Response
     */
    public function show(Leaverequest $leaverequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leaverequest  $leaverequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaverequest $leaverequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leaverequest  $leaverequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leaverequest $leaverequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leaverequest  $leaverequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaverequest $leaverequest)
    {
        //
    }
}
