<?php

namespace App\Http\Controllers;

use App\Leave_Request;
use Illuminate\Http\Request;

class Leave_RequestController extends Controller
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
        return view('backend.leave_requests.create');
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
     * @param  \App\Leave_Request  $leave_Request
     * @return \Illuminate\Http\Response
     */
    public function show(Leave_Request $leave_Request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leave_Request  $leave_Request
     * @return \Illuminate\Http\Response
     */
    public function edit(Leave_Request $leave_Request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leave_Request  $leave_Request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leave_Request $leave_Request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leave_Request  $leave_Request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave_Request $leave_Request)
    {
        //
    }
}
