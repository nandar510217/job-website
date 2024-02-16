@extends('admin-panel.master')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="caption pro-sl-hd">
            <span class="caption-subject text-uppercase"><b>Edit Jobs</b></span>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="actions graph-rp">
            <a href="{{ url('/admin/jobs') }}" class="btn btn-primary">Back</a>            
        </div>
    </div>
</div>
    <form action="{{ route('jobs.update', $job->id) }}" method="post" style="color: aliceblue">
        @csrf @method('put')
        <div>
            <input type="hidden" name="employer_id" value="{{ Auth::user()->id}}   " class="form-control"> 
        </div>
        <div>
            <label for="">Position</label>
            <input type="text" name="position" value="{{ old('position', $job->position) }}" class="form-control @error('position') is-invalid @enderror">
            @error('position')
            <span class="text-danger">{{ $message }}</span> 
            @enderror      
        </div>
        <div>
            <label for="">Category</label>
            <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{ old('category_id', $job->category_id) == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                @endforeach
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror 
            </select>       
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" value="{{old('description', $job->description)}}" class="form-control @error('description') is-invalid @enderror">       
            @error('description')
            <span class="text-danger">{{ $message }}</span> 
            @enderror 
        </div>
        <div>
            <label for="">Salary</label>
            <input type="text" name="salary" value="{{ old('salary', $job->salary) }}" class="form-control @error('salary') is-invalid @enderror">       
            @error('salary')
            <span class="text-danger">{{ $message }}</span> 
            @enderror 
        </div>
        <div class="float-right">
            <button type="submit" class="btn-primary btn mt-3">Update</button>
        </div>
    </form>
@endsection