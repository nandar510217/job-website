@extends('admin-panel.master')
@section('content')
    {{-- <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="caption pro-sl-hd">
                <span class="caption-subject text-uppercase"><b>Jobs Category</b></span>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="actions graph-rp">
                <a href="#" class="btn btn-primary">Create</a>
                    
            </div>
        </div>
    </div> --}}
    <h2>Payments</h2>
    <table class="table table-bordered table-hover">
        <thead class="text-warning">
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- foreach ($payments as $payment) --}}
                <tr>
                    <td>name</td>
                    <td>role</td>
                    <td>active</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('paymentInfo')}}">Payment Info</a>
                    </td>
                </tr> 
            {{-- endforeach --}}
        </tbody>
    </table>
        
    
        
@endsection