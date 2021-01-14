<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = Leave::all();
        return view('backend.leaves.index', compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.leaves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // dd($request);
          $request->validate([
            'name' => 'required|min:3',
            'remark' => 'required'
        ]);
        // Store Data
        $leave = new Leave();
        $leave->name = $request->name;
        $leave->remark = $request->remark;
        $leave->save();
        // redirect
        return redirect()->route('leaves.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit(Leave $leave)
    {
        return view('backend.leaves.edit', compact('leave'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leave $leave)
    {
         // dd($request);
         $request->validate([
            'name' => 'required|min:3',
            'remark' => 'required'
        ]);
        // Store Data
        $leave->name = $request->name;
        $leave->remark = $request->remark;
        $leave->save();
        // redirect
        return redirect()->route('leaves.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        //
    }
}
