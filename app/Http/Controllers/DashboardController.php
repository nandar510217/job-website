<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        return view('admin-panel.index');
    }

    public function payment () {
        return view('admin-panel.payment');
    }

    public function paymentInfo () {
        return view('admin-panel.paymentInfo');
    }
    
}
