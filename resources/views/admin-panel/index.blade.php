@extends('admin-panel.master')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="caption pro-sl-hd">
            {{-- <span class="caption-subject text-uppercase"><b>Admin Dashboard</b></span> --}}
            <h1 class="text-warning">Admin Dashboard</h1>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="actions graph-rp">
                {{-- <label class="btn btn-grey active">
                    <input type="radio" name="options" class="toggle" id="option1" checked="">Today</label> --}}
                {{-- <label class="btn btn-grey"> --}}
                    {{-- <input type="radio" name="options" class="toggle" id="option2">Week</label> --}}
                    {{-- @if(Route::is('create'))
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
                    @elseif(Route::is('dashboard'))
                        <a href="{{ url('/admin/create') }}" class="btn btn-primary">Create</a>
                    @endif --}}
                
        </div>
    </div>
</div>
@endsection