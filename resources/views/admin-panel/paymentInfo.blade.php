@extends('admin-panel.master')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="caption pro-sl-hd">
                <h2 class="caption-subject text-uppercase text-info"><b>Payments Info</b></h2>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="actions graph-rp">
                <a href="{{ route('payments')}}" class="btn btn-primary">Back</a>
                    
            </div>
        </div>
    </div>
    <div class="card">
        <form action="">
            <div class="card-title">
                <h3>{{ Auth::user()->name }}</h3>
                <img src="" alt="" style="width: 200px; height: 200px;">
            </div>
            <div class="card-footer" style="margin-top: 9px">
                <button type="submit" class="btn btn-success">Accept</button>
            </div>
        </form>
    </div>
    
        
@endsection