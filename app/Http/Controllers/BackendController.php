<?php

namespace App\Http\Controllers;

use App\Staffinfo;
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
        $staffinfos = Staffinfo::find($id);
        return view('backend.staffinfos.info_detail', compact('staffinfos'));

    }
}
