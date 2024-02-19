<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('admin-panel.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin-panel.job.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'employer_id' => 'required',
            'position' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'salary' => 'required',
        ]);
        $job = Job::create($data);
        return redirect()->route('jobs.index')->with('successMsg', 'Job created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Job::findOrfail($id);
        $categories = Category::all();
        return view('admin-panel.job.edit', compact('job', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'employer_id' => 'required',
            'position' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'salary' => 'required',
        ]);
        $job = Job::findOrfail($id);
        $job->update($data);
        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = Job::findOrfail($id);
        $job->delete();
        return back();
    }
}
