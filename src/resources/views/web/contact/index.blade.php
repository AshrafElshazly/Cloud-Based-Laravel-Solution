@extends('web.layout.master')

@section('content')

<!--Page Title-->
<section class="page-title text-center" style="background-image:url({{asset('assets/web/images/background/3.jpg')}});">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{url('')}}">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==== Contact Form  ====-->
<section class="section contact">
  <!-- container start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 ">
        <!-- address start -->
        <div class="address-block">
          <!-- Location -->
          <div class="media">
            <i class="far fa-map"></i>
            <div class="media-body">
              <h3>Location</h3>
              <p>{{$settings->location}}</p>
            </div>
          </div>
          <!-- Phone -->
          <div class="media">
            <i class="fas fa-phone"></i>
            <div class="media-body">
              <h3>Phone</h3>
              <p>
              {{$settings->phone}}
              </p>
            </div>
          </div>
          <!-- Email -->
          <div class="media">
            <i class="far fa-envelope"></i>
            <div class="media-body">
              <h3>Email</h3>
              <p>
              {{$settings->email}}
              </p>
            </div>
          </div>
        </div>
        <!-- address end -->
      </div>
      <div class="col-lg-8 col-md-7">
        <div class="contact-form">
          <!-- contact form start -->
          <form method="POST" action="{{url('contact-us/store')}}" class="row">
            @csrf
            <!-- name -->
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
            <div class="col-lg-6">
              <input type="text" name="name" class="form-control main" placeholder="Name"  >
            </div>
            <!-- email -->
            <div class="col-lg-6">
              <input type="text" name="email" class="form-control main" placeholder="Email"  >
            </div>
            <!-- phone -->
            <div class="col-lg-12">
              <input type="text" name="phone" class="form-control main" placeholder="Phone"  >
            </div>
            <!-- message -->
            <div class="col-lg-12">
              <textarea name="message" rows="10" class="form-control main" placeholder="Your message"></textarea>
            </div>
            <!-- submit button -->
            <div class="col-md-12 text-right">
              <button class="btn btn-style-one" type="submit">Send Message</button>
            </div>
          </form>
          <!-- contact form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!-- Google Map -->
<section class="map">
  <div id="map-container-google-1">
    {!!$settings->map!!}
  </div>
</section>
<!--====  End of Google Map  ====-->

@endsection