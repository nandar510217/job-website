@extends('layouts.app')
@section('content')
<div class="page-heading about-heading header-text" style="background: url('{{ asset('ui-panel/assets/images/heading-6-1920x500.jpg') }}') center center/cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="text-content">
                {{-- <h4>Lorem ipsum dolor sit amet</h4> --}}
                <h2><a class="text-white" href="#">{{Auth::user()->name}}</a></h2>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h3 class="text-center text-info">{{ $job->employer->name }}</h3>
                    <h5 class="mb-3">Position : {{ $job->position }}</h5>
                    <form action="{{ route("applicationStore")}}" method="post">
                        @csrf 
                        <input type="hidden" name="job_id" value="{{$job->id}}" class="form-control">
                        <input type="hidden" name="employee_id" value="{{$user->id}}" class="form-control">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Skill</label>
                            <input type="text" name="skill" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Experience</label>
                            <input type="text" name="experience" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Expected salary</label>
                            <input type="text" name="expected_salary" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-info float-right">Save</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

@endsection