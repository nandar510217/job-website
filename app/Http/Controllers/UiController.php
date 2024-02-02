<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function index() {
        return view('layouts.app');
    }
    public function jobs() {
        return view('ui-panel.jobs');
    }
    public function detail() {
        return view('ui-panel.job-details');
    }
}
