<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingPostAdsController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard.dashboard-post-ads');
    }
}
