@extends('admin-panel.master')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="caption pro-sl-hd">
            <span class="caption-subject text-uppercase"><b>Jobs</b></span>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="actions graph-rp">
            <a href="{{ url('/admin/jobs') }}" class="btn btn-primary">Back</a>            
        </div>
    </div>
</div>
    <form action="{{ route('jobs.store') }}" method="post" style="color: aliceblue">
        @csrf
        <div>
            <input type="hidden" name="employer_id" value="{{ Auth::user()->id}}" class="form-control"> 
        </div>
        <div>
            <label for="">Position</label>
            <input type="text" name="position" class="form-control">       
        </div>
        <div>
            <label for="">Category</label>
            <select name="category_id" id="" class="form-control">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>       
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" class="form-control">       
        </div>
        <div>
            <label for="">Salary</label>
            <input type="text" name="salary" class="form-control">       
        </div>
        <div class="float-right">
            <button type="submit" class="btn-primary btn mt-3">Create</button>
        </div>
    </form>
@endsection