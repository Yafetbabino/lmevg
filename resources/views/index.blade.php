@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="{{asset('storage/imgs/img_cross.jpg')}}" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 style="font-size:6vw;" class="text-center">{{__('welcome.intro1')}}</h1>
            <p class="text-white">
            </p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('register', app()-> getLocale()) }}" role="button">{{__('welcome.intro1_1')}}</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('storage/imgs/img_lights_wide.jpg')}}" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 class="text-light" style="font-size:3vw;">{{__('welcome.intro2')}} </h1>
            <ul >
                <li style="font-size:2vw;">{{__('welcome.intro2_1')}}</li>
                <li style="font-size:2vw;">{{__('welcome.intro2_2')}}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('storage/imgs/img_skytalk.jpg')}}" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 class="text-success" style="font-size:3vw;">{{__('welcome.intro3')}}</h1>
            <ul>
              <li style="font-size:2vw;">{{__('welcome.intro3_1')}}</li>
              <li style="font-size:2vw;">{{__('welcome.intro3_2')}}</li>
          </ul>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<hr class="featurette-divider">


<!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row ">
      <div class="col-lg-4 text-center" id="vision" >
        <img src="{{asset('storage/imgs/church_vision.png')}}" class="rounded-circle" width="140" height="140" alt="KHC logo">
        <h2  >{{__('welcome.vision')}}</h2>
        <p>{{__('welcome.vision_1')}}</p>


      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center"  id="mission">
        <img src="{{asset('storage/imgs/church_mission.png')}}" class="rounded-circle" width="140" height="140" alt="KHC logo">
        <h2 id="mission">{{__('welcome.mission')}}</h2>
        <p>{{__('welcome.mission_1')}}</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center"  id="goal">
        <img src="{{asset('storage/imgs/church_goal.png')}}" class="rounded-circle" width="140" height="140" alt="KHC logo">
        <h2 >{{__('welcome.goal')}}</h2>
        <p>{{__('welcome.goal_1')}}</p>

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <h6 style="font-size:4vw;" class="text-center"> {{__('welcome.happy2013')}}</h6>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading" > <span class="text-muted">{{__('welcome.y1d')}}</span></h2>
        <p class="lead">{{__('welcome.ymd')}}<span class="badge badge-primary">{{__('welcome.y1dbold')}}</span> {{__('welcome.y1d1')}}</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('storage/imgs/hand_world.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Year- first day">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><span class="text-muted">{{__('welcome.m1d')}}</span></h2>
        <p class="lead">{{__('welcome.ymd')}}<span class="badge badge-primary">{{__('welcome.m1dbold')}}</span>{{__('welcome.m1d1')}}</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{asset('storage/imgs/pay.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Month- first day">
      </div>
    </div>

    <hr class="featurette-divider">
    {{-- pray --}}
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span class="text-muted">{{__('welcome.w1d')}}</span></h2>
        <p class="lead">{{__('welcome.ymd')}}<span class="badge badge-primary">{{__('welcome.w1dbold')}}</span> {{__('welcome.w1d1')}} <span class="text-primary">{{__('welcome.w1d2')}}</span></p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('storage/imgs/pray.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Week First day">
      </div>
    </div>

    <hr class="featurette-divider">
    {{-- network --}}
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><span class="text-muted">{{__('welcome.one2one')}}</span></h2>
        <ul>
          <li class="lead">{{__('welcome.one2one1')}}</li>
          <li class="lead">{{__('welcome.one2one2')}}</li>
          <li class="lead">{{__('welcome.one2one3')}}</li>
        </ul>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{asset('storage/imgs/network.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="network">
      </div>
    </div>

    <hr class="featurette-divider">

    {{-- member contribution --}}
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span class="text-muted">{{__('welcome.contribute')}}</span></h2>
        <p class="lead">{{__('welcome.contribute1')}}</p>
        <p class="lead text-danger">{{__('welcome.contribute2')}}</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('storage/imgs/money.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Week First day">
      </div>
    </div>


    <hr class="featurette-divider">
    {{-- CBE bank --}}
    <div class="row featurette">
        <div class="col-md-6 order-md-2">
          <h2 class="featurette-heading"><span class="text-muted">{{__('welcome.cbe')}}</span></h2>
          <div class="card">
            <div class="card-header"><b>{{ __('welcome.bankDetail')}}</b></div>
            <div class="card-body lead">
                <p>{{ __('welcome.accountName')." " }} <span class="text-primary" style="font-size: 25px;">{{ __('welcome.lme') }} </span></p>
                <p>{{ __('welcome.accountNo')." " }} <span class="text-primary " style="font-size: 25px;"> {{ __('welcome.cbeNumber') }}</span></p>
            </div>
        </div>
        </div>
        <div class="col-md-6 order-md-1">
          <img src="{{asset('storage/imgs/cbe.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="network">
        </div>
      </div>

      <hr class="featurette-divider">

      {{-- Awash Banck --}}
      <div class="row featurette">
        <div class="col-md-6">
          <h2 class="featurette-heading"><span class="text-muted">{{__('welcome.awash')}}</span></h2>
          <div class="card">
            <div class="card-header"><b>{{ __('welcome.bankDetail')}}</b></div>
            <div class="card-body lead">
                <p>{{ __('welcome.accountName')." " }} <span class="text-primary" style="font-size: 25px;">{{ __('welcome.lme') }} </span></p>
                <p>{{ __('welcome.accountNo')." " }} <span class="text-primary " style="font-size: 25px;"> {{ __('welcome.awashNumber') }}</span></p>
            </div>
        </div>
        </div>
        <div class="col-md-6">
          <img src="{{asset('storage/imgs/awash.png')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="700" height="500" alt="Week First day">
        </div>
      </div>

      <hr class="featurette-divider">
    {{-- Birhan bank --}}
    <div class="row featurette">
        <div class="col-md-6 order-md-2">
          <h2 class="featurette-heading"><span class="text-muted">{{__('welcome.berhan')}}</span></h2>
          <div class="card">
            <div class="card-header"><b>{{ __('welcome.bankDetail')}}</b></div>
            <div class="card-body lead">
                <p>{{ __('welcome.accountName')." " }} <span class="text-primary" style="font-size: 25px;">{{ __('welcome.lme') }} </span></p>
                <p>{{ __('welcome.accountNo')." " }} <span class="text-primary " style="font-size: 25px;"> {{ __('welcome.berhanNumber') }}</span></p>
            </div>
        </div>
        </div>
        <div class="col-md-6 order-md-1">
          <img src="{{asset('storage/imgs/birhan.png')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="network">
        </div>
      </div>

      <hr class="featurette-divider">

    {{-- Certificate --}}
    <div class="row featurette">
      <div class="col-md-4">
        <h2 class="featurette-heading"><span class="text-muted">{{__('welcome.cer')}}</span></h2>
        <p class="lead"> {{__('welcome.cer1')}}</p>
      </div>
      <div class="col-md-8">
        <img src="{{asset('storage/imgs/Certificate_Template.png')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="700" height="500" alt="Week First day">
      </div>
    </div>

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


  @endsection
