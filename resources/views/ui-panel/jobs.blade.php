<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Job Agency Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/ui-panel/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('/ui-panel/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('/ui-panel/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/ui-panel/assets/css/owl.css')}}">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Job Agency <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="{{url("/jobs")}}">Jobs</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.html">About us</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="team.html">Team</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

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
                 <h5 style="margin-bottom: 15px">Type</h5>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Contract (5)</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Full time (5)</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Internship (5)</small>
                      </label>
                 </div>

                 <br>

                 <h5 style="margin-bottom: 15px">Category</h5>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Accounting / Finance / Insurance Jobs (5)</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Accounting / Finance / Insurance Jobs (5)</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Accounting / Finance / Insurance Jobs (5)</small>
                      </label>
                 </div>

                 <br>

                 <h5 style="margin-bottom: 15px">Career levels</h5>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Entry Level (5)</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Entry Level (5)</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Entry Level (5)</small>
                      </label>
                 </div>

                 <br>

                 <h5 style="margin-bottom: 15px">Education levels</h5>

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
              <div class="col-md-6">
                <div class="product-item">
                  <a href="{{url("/job-details")}}"><img src="ui-panel/assets/images/product-1-370x270.jpg" alt=""></a>
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
              </div>

              <div class="col-md-6">
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
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="{{url("/job-details")}}"><img src="/ui-panel/assets/images/product-3-370x270.jpg" alt=""></a>
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
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="{{url("/job-details")}}"><img src="ui-panel/assets/images/product-4-370x270.jpg" alt=""></a>
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
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="{{url("/job-details")}}"><img src="ui-panel/assets/images/product-5-370x270.jpg" alt=""></a>
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
              </div>

              <div class="col-md-6">
                <div class="product-item">
                  <a href="job-details.html"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
                  <div class="down-content">
                    <a href="job-details.html"><h4>Lorem ipsum dolor sit amet</h4></a>

                    <h6>$60 000</h6>

                    <h4><small><i class="fa fa-briefcase"></i> Medical / Health Jobs <br> <strong><i class="fa fa-building"></i> BMI Kings Park Hospital</strong></small></h4>

                    <small>
                         <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                         <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                         <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                    </small>
                  </div>
                </div>
              </div>

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

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('ui-panel/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('ui-panel/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('ui-panel/assets/js/custom.js')}}"></script>
    <script src="{{asset('ui-panel/assets/js/owl.js')}}"></script>
  </body>

</html>
