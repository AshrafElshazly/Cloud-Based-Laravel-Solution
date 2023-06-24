@extends('web.layout.master')

@section('content')

<section class="page-title text-center" style="background-image:url({{asset('assets/web/images/background/3.jpg')}});">
    <div class="container">
        <div class="title-text">
            <h1>Feedback</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{url('')}}">home &nbsp;/</a>
                </li>
                <li>Feedback</li>
            </ul>
        </div>
    </div>
</section>


<section class="section style-three pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-0">
          <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
            <div class="section-title">
              <h3>Your <span>Feedback</span></h3>
            </div>
            <form method="POST" action="{{url('feedback/store')}}" enctype="multipart/form-data">
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
                <!-- name -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name">
                  </div>
                </div>
                <!-- email -->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email">
                      </div>
                </div>
                <!-- Upload image-->
                <div class="col-md-12">
                    <div class="input-group mb-3 px-2 py-2 form-control" id="pick-img">
                        <input id="upload" type="file" accept="image/*" class="form-control border-0" name="img">
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose img</label>
                        <div class="input-group-append">
                            <label id ="upload-btn" for="upload" class="btn m-3 rounded-pill px-4"> <i class="fas fa-cloud-upload-alt text-muted" style="padding-right: 5px"></i><small class="text-uppercase font-weight-bold text-muted">Choose img</small></label>
                        </div>
                    </div>
                </div>
                <!-- feedback -->
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="feedback" placeholder="Your Feedback"></textarea>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn-style-one">Send Feedback</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 mb-4 mb-lg-0 order-0 order-lg-1">
          <div class="appointment-image-holder ml-0 ml-lg-4">
            <figure>
              <img loading="lazy" class="w-100" src="{{asset('assets/web/images/background/feedback.jpg')}}" alt="Feedback">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('style')
    <style>
        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }
        #upload-btn{
            width: 100%;
            transform: translateY(-60%);
            right: -1rem;
        }
        #pick-img{
          height: 43px;
          background: rgb(242, 243, 243);
        }
    </style>
@endsection

@section('script')
    <script>
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );

        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'Img name: ' + fileName;
        }
    </script>
@endsection