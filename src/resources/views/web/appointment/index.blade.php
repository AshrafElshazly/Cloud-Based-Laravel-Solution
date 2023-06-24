@extends('web.layout.master')

@section('content')

<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{asset('assets/web/images/background/3.jpg')}})">
    <div class="container">
        <div class="title-text">
            <h1>appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{url('')}}">home &nbsp;/</a>
                </li>
                <li>appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Section -->
<section class="section style-three pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-0">
        <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
          <div class="section-title">
            <h3>Request <span>Appointment</span></h3>
          </div>
          <form name="appointment" class="default-form contact-form" action="{{url('appointment/store')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="date" placeholder="Date" id="datepicker" autocomplete="off">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                  <select class="form-control" name="department" id="department">
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option> 
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <select class="form-control" name="doctor" id="doctor">
                    <option value="">Select Doctor</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn-style-one">submit now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mb-lg-0 order-0 order-lg-1">
        <div class="appointment-image-holder ml-0 ml-lg-4">
          <figure>
            <img loading="lazy" class="w-100" src="{{asset('assets/web/images/background/appoinment.jpg')}}" alt="Appointment">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section -->

<!--Start Team Section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Doctors</span>
            </h3>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
                <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
        </div>
        <div class="row justify-content-center">
        @foreach($doctors as $doctor)
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img loading="lazy" src="{{asset('uploads/web/doctors/'.$doctor->img)}}" alt="doctor" class="img-fluid">
                    <div class="contents text-center">
                        <h4>Dr. {{$doctor->name}}</h4>
                        <p> {{$doctor->about}} </p>
                        <a href="{{url('appointment')}}" class="btn btn-main">Book Appointment</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
<!--End Team Section-->

@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() 
  {
    $('#department').on('change', function() {
      var departmentID = $(this).val();
      if(departmentID) {
        $.ajax({
          url: 'appointment/getDoctors/'+departmentID,
          type: "GET",
          dataType: "json",
          success:function(data) {
            if(data){
              console.log(data);
              $('#doctor').empty();
              $('#doctor').focus;
              $.each(data, function(key, value){
              $('#doctor').append('<option value="'+ value.doctor_id +'">' +  value.doctor_name + '</option>');
                });
              }else{
                $('#doctor').empty();
              }
          }
        });
      }else{
        $('#doctor').empty();
      }
    });
  });
</script>
@endsection