@extends('admin-panel.master')
@section('content')
    <span class="text-warning mb-2">{{session()->get('success')}}</span>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="caption pro-sl-hd">
                <span class="caption-subject text-uppercase"><b>Jobs Category</b></span>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="actions graph-rp">
                <a href="{{ url('/admin/categories/create') }}" class="btn btn-primary">Create</a>
                    
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover text-warning">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name}}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                            @csrf @method('delete')
                            <a class="btn btn-info" href="{{ route('categories.edit', $category->id)}}">Edit</a>
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
        
@endsection