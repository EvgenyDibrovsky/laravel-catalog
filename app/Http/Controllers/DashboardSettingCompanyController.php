<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingCompanyController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard.dashboard-setting-company');
    }
}
