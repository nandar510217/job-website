@extends('admin-panel.master')
@section('content')
    <span class="text-warning mb-2">{{session()->get('success')}}</span>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="caption pro-sl-hd">
                <span class="caption-subject text-uppercase"><b>Jobs</b></span>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="actions graph-rp">
                <a href="{{ url('/admin/jobs/create') }}" class="btn btn-primary">Create</a>
                    
            </div>
        </div>
    </div>
    @if(session('successMsg'))
    <h3 class="text-success alert">{{session()->get('successMsg')}}</h3>
    @endif
    <table class="table table-bordered table-hover text-warning">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company Name employer id</th>
                <th>Position</th>
                <th>Job Categories category id</th>
                <th>Description</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->id }}</td>
                    <td>{{ $job->employer_id }}</td>
                    <td>{{ $job->position }}</td>
                    <td>{{ $job->category_id }}</td>
                    <td>{{ $job->description }}</td>
                    <td>{{ $job->salary }}</td>
                    <td>
                        <form action="{{ route('jobs.destroy', $job->id)}}" method="post">
                            @csrf @method('delete')
                            <a href="{{ route('jobs.edit', $job->id)}}" class="btn btn-info btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
        
@endsection