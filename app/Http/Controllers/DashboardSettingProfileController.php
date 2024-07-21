<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingProfileController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard.dashboard-setting-profile');
    }
}
