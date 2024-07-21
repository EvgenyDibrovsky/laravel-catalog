<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingAccountController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard.dashboard-setting-account');
    }
}
