<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class UiController extends Controller
{
    public function index() {
        return view('layouts.app');
    }

    public function jobs() {
        $jobs = Job::all();
        $categories = Category::all();
        return view('ui-panel.jobs', compact('jobs', 'categories'));
    }

    public function getRelatedJobs($id = null)
    {
        $categories = Category::all();
       
            $jobs = Job::all();
            $jobs = $id ? Job::where('category_id', $id)->get() : Job::all();
        return view('ui-panel.jobs', compact('categories', 'jobs'));
    }

    
    

    public function detail() {
        return view('ui-panel.job-details');
    }
}
