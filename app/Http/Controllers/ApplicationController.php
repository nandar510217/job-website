<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function application($id) {
        $job = Job::findOrfail($id);
        $user = Auth::user();
        return view('ui-panel.application', compact('job', 'user'));
    }

    public function applicationStore(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'skill' => 'required',
            'experience' => 'required',
            'expected_salary' => 'required',
        ]);
        Application::create([
            'job_id' => $request->job_id,
            'employee_id' => $request->employee_id,
            'name' => $request->name,
            'email' => $request->email,
            'skill' => $request->skill,
            'experience' => $request->experience,
            'expected_salary' => $request->expected_salary,
        ]);
        return back()->with('success', 'Application submitted successfully.');
    }
}
