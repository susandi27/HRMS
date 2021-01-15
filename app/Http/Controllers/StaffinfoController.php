<?php

namespace App\Http\Controllers;

use App\Staffinfo;
use Illuminate\Http\Request;
use App\User;
use App\Department;

class StaffinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffinfos = Staffinfo::orderBy('id', 'desc')->get();
        return view('backend.staffinfos.index', compact('staffinfos'));
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
        return view('backend.staffinfos.create', compact('users', 'departments'));
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
        $staff_Info = new Staffinfo();
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
        return redirect()->route('staffinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staffinfo  $staffinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Staffinfo $staffinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staffinfo  $staffinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffinfo $staffinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staffinfo  $staffinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staffinfo $staffinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staffinfo  $staffinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffinfo $staffinfo)
    {
        //
    }
}
