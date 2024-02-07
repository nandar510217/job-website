@extends('admin-panel.master')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="caption pro-sl-hd">
            <span class="caption-subject text-uppercase"><b>Jobs Category</b></span>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="actions graph-rp">
            <a href="{{ url('/admin/categories') }}" class="btn btn-primary">Back</a>            
        </div>
    </div>
</div>
    <form action="{{ route('categories.store') }}" method="post" style="color: aliceblue">
        @csrf
        <div>
            <label for="">Name</label>
        </div>
        <div>
            <input type="text" name="name" class="form-control">       
        </div>
        <div class="float-right">
            <button type="submit" class="btn-primary btn mt-3">Save</button>
        </div>
    </form>
@endsection