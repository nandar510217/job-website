@extends('layouts.app')
@section('content')

<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(ui-panel/assets/images/heading-6-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Lorem ipsum dolor sit amet</h4>
          <h2>Jobs</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
         <div class="contact-form">
            <form action="#">
              <h5 style="margin-bottom: 15px">Category</h5>
                <div>
                    <label>
                      <a href="{{ route('getRelatedJobs') }}">All</a>
                    </label>
                </div>

                <div>
                  @foreach ($categories as $category)
                      <div>
                        <label>
                          <a href="{{ route('getRelatedJobs', $category->id) }}">{{ $category->name }}</a>
                        </label>
                      </div>
                  @endforeach
                </div>

              <h5 style="margin-bottom: 15px" class="mt-3">Education levels</h5>

              <div>
                    <label>
                        <input type="checkbox">

                        <small>Associate Degree (5)</small>
                    </label>
              </div>

              <div>
                    <label>
                        <input type="checkbox">

                        <small>Associate Degree (5)</small>
                    </label>
              </div>

              <div>
                    <label>
                        <input type="checkbox">

                        <small>Associate Degree (5)</small>
                    </label>
              </div>
              <br>
              <h5 style="margin-bottom: 15px">Years of experience</h5>

              <div>
                    <label>
                        <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
              </div>

              <div>
                    <label>
                        <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
              </div>

              <div>
                    <label>
                        <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
              </div>
            </form>
         </div>
      </div>

      <div class="col-md-9">
        <div class="row">
          @foreach ($jobs as $job)
              <div class="product-item m-2">
                <a href="{{ url("/job-details") }}">
                  <img src="{{ asset('ui-panel/assets/images/product-1-370x270.jpg') }}" alt="">
                </a>
                
                <div class="down-content">
                  <a href="{{url("/job-details")}}"><h4>{{ optional($job->employer)->name }}</h4></a>

                  <h6>$ {{ $job->salary }}</h6>


                  <h4><small><i class="fa fa-briefcase"></i> {{$job->position}} <br> 
                  <strong><i class="fa fa-building"></i> {{ $job->description }} </strong></small></h4>

                  <small>
                      <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                  </small>
                </div>
                <div>
                  <a class="btn btn-primary btn-sm m-3 float-right" href="{{ route('application', $job->id)}}">Apply</a>
                </div>
              </div>
            @endforeach
         
          {{-- <div class="col-md-6">
            <div class="product-item">
              <a href="{{url("/job-details")}}"><img src="ui-panel/assets/images/product-2-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{url("/job-details")}}"><h4>Lorem ipsum dolor sit amet</h4></a>

                <h6>$60 000</h6>

                <h4><small><i class="fa fa-briefcase"></i> Medical / Health Jobs <br> <strong><i class="fa fa-building"></i> BMI Kings Park Hospital</strong></small></h4>

                <small>
                     <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                </small>
              </div>
            </div>
          </div> --}}

          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection