<?php

namespace App\Http\Controllers;

use App\Staff_Info;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class BackendController extends Controller
{
    public function dashboard($value = '')
    {
        return view('dashboard');
    }
    public function info_detail($id)
    {
        $staff_infos = Staff_Info::find($id);
        return view('backend.staff_infos.info_detail', compact('staff_infos'));

    }
}
