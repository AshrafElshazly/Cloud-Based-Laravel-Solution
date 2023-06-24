@extends('web.layout.master')

@section('content')

<!--Page Title-->
<section class="page-title text-center" style="background-image:url( {{asset('assets/web/images/background/3.jpg')}});">
    <div class="container">
        <div class="title-text">
            <h1>about us</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{url('')}}">home &nbsp;/</a>
                </li>
                <li>about us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Our Story -->
<section class="story">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img loading="lazy" src="{{asset('uploads/web/about/'.$abouts->image)}}" class="responsive" alt="story">
      </div>
      <div class="col-lg-6">
        <div class="story-content">
          <h2>Our Story</h2>
          <h5 class="tagline"> {{$abouts->our_story}} </h5>
            <h6>Mission</h6>
            <p>{{$abouts->mission}}</p>
            <h6>Vision</h6>
            <p>{{$abouts->vision}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Our Story -->

@endsection