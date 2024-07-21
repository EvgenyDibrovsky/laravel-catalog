<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPaymentsController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard.dashboard-payments');
    }
}
