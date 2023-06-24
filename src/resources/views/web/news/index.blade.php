@extends('web.layout.master')

@section('content')
<section class="page-title text-center" style="background-image:url({{asset('assets/web/images/background/3.jpg')}});">
    <div class="container">
        <div class="title-text">
            <h1>News</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{url('')}}">home &nbsp;/</a>
                </li>
                <li>Bookings</li>
            </ul>
        </div>
    </div>
</section>


@endsection