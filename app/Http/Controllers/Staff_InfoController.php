<?php

namespace App\Http\Controllers;

use App\Staff_Info;
use App\User;
use App\Department;
use Illuminate\Http\Request;

class Staff_InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff_infos = Staff_Info::orderBy('id', 'desc')->get();
        return view('backend.staff_infos.index', compact('staff_infos'));
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
        return view('backend.staff_infos.create', compact('users', 'departments'));
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
            'user_id' => 'required',
            'department_id' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'nrc' => 'required|min:10',
            'father_name' => 'required|min:2',
            'mother_name' => 'required|min:2',
            'religion' => 'required',
            'nationality' => 'required',
            'marital_status' => 'required',
            'degree' => 'required',
            'start_work_date' => 'required',
            'current_position' => 'required',
            'salary' => 'required',
            'current_position_date' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'current_address' => 'required',
            'remark' => 'required|min:3',
            'photo' => 'required|mimes:png,jpg,jpeg,webp'
        ]);
        //  Upload
        if ($request->file()) {
            // File Name Change
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            //categoryimg change
            $filePath = $request->file('photo')->storeAs('staff_infoimg', $fileName, 'public');
            $path = '/storage/' . $filePath;
        }
        // Store Data
        $staff_Info = new Staff_Info();
        $staff_Info->user_id = $request->user_id;
        $staff_Info->department_id = $request->department_id;
        $staff_Info->birthday = $request->birthday;
        $staff_Info->gender = $request->gender;
        $staff_Info->nrc = $request->nrc;
        $staff_Info->father_name = $request->father_name;
        $staff_Info->mother_name = $request->mother_name;
        $staff_Info->religion = $request->religion;
        $staff_Info->nationality = $request->nationality;
        $staff_Info->marital_status = $request->marital_status;
        $staff_Info->degree = $request->degree;
        $staff_Info->start_work_date = $request->start_work_date;
        $staff_Info->current_position = $request->current_position;
        $staff_Info->salary = $request->salary;
        $staff_Info->current_position_date = $request->current_position_date;
        $staff_Info->phone = $request->phone;
        $staff_Info->email = $request->email;
        $staff_Info->address = $request->address;
        $staff_Info->current_address = $request->current_address;
        $staff_Info->remark = $request->remark;
        $staff_Info->photo = $path;
        $staff_Info->save();
        // redirect
        // return redirect()->route('staff_infos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff_Info  $staff_Info
     * @return \Illuminate\Http\Response
     */
    public function show(Staff_Info $staff_Info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff_Info  $staff_Info
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff_Info $staff_Info)
    {
        $users = User::all();
        $departments = Department::all();
        return view('backend.staff_infos.edit', compact('staff_info','users', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff_Info  $staff_Info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff_Info $staff_Info)
    {
        // dd($request);
        $request->validate([
            'user_id' => 'required',
            'department_id' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'nrc' => 'required|min:10',
            'father_name' => 'required|min:2',
            'mother_name' => 'required|min:2',
            'religion' => 'required',
            'nationality' => 'required',
            'marital_status' => 'required',
            'degree' => 'required',
            'start_work_date' => 'required',
            'current_position' => 'required',
            'salary' => 'required',
            'current_position_date' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'current_address' => 'required',
            'remark' => 'required|min:3',
            'photo' => 'required|mimes:png,jpg,jpeg,webp'
        ]);
        //  Upload
        if ($request->file()) {
            // File Name Change
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            //categoryimg change
            $filePath = $request->file('photo')->storeAs('staff_infoimg', $fileName, 'public');
            $path = '/storage/' . $filePath;
            $staff_Info->photo = $path;
        }
        // Store Data
        $staff_Info->user_id = $request->user_id;
        $staff_Info->department_id = $request->department_id;
        $staff_Info->birthday = $request->birthday;
        $staff_Info->gender = $request->gender;
        $staff_Info->nrc = $request->nrc;
        $staff_Info->father_name = $request->father_name;
        $staff_Info->mother_name = $request->mother_name;
        $staff_Info->religion = $request->religion;
        $staff_Info->nationality = $request->nationality;
        $staff_Info->marital_status = $request->marital_status;
        $staff_Info->degree = $request->degree;
        $staff_Info->start_work_date = $request->start_work_date;
        $staff_Info->current_position = $request->current_position;
        $staff_Info->salary = $request->salary;
        $staff_Info->current_position_date = $request->current_position_date;
        $staff_Info->phone = $request->phone;
        $staff_Info->email = $request->email;
        $staff_Info->address = $request->address;
        $staff_Info->current_address = $request->current_address;
        $staff_Info->remark = $request->remark;
        $staff_Info->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff_Info  $staff_Info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff_Info $staff_Info)
    {
        //
    }
}
