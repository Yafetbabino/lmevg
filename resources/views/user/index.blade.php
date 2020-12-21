@extends('layouts.app')

@section('content')

<!--ShowCase-->
<div id="ShowCase">
    <div class="overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 mt-5 text-primary">{{__('user.header')}} </h1>
                    <h3 class="text-muted">{{__('user.header_1')}} </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="MainSection">
    <div class="container">
        <div class="row">


            <!--First Section-->
            <div class="col-lg-4">
                <div class="mt-5">
                    <a href="student.html"><img src="{{asset('storage/imgs/picture (1).jpg')}}" width="612px" height="320" class="img-fluid mb-3"></a>
                    <h4>{{__('user.first')}}</h4>
                    <p class="text-muted">{{__('user.p1')}}</p>
                    <p class="lead text-justify">{{__('user.p1_data')}}</p>
                </div>

                <!--Second Post-->
                <div class="mt-5">
                        <a href="install-kali.html"><img src="{{asset('storage/imgs/picture (2).jpg')}}" width="612px" height="320" class="img-fluid mb-3"></a>
                        <h4>{{__('user.second')}}</h4>
                    <p class="text-muted">{{__('user.p2')}}</p>
                    <p class="lead text-justify">{{__('user.p2_data')}}</p>
                </div>

                <!--Third Post-->
                <div class="mt-5">
                        <a href="school-managment.html"><img src="{{asset('storage/imgs/picture (3).jpg')}}" width="612px" height="320" class="img-fluid mb-3"></a>
                        <h4>{{__('user.third')}}</h4>
                    <p class="text-muted">{{__('user.p3')}}</p>
                    <p class="lead text-justify">{{__('user.p3_data')}}</p>
                </div>
            </div>

            <!--Second Section-->
            <div class="col-lg-4">

                <div class="mt-5">
                    <a href="wordpress-tutorial.html"><img src="{{asset('storage/imgs/picture (4).jpg')}}" width="612px" height="320" class="img-fluid mb-3"></a>
                    <h4>{{__('user.right1header')}}</h4>
                    <p class="lead text-justify">{{__('user.right1body')}}</p>
                </div>


                <!--Second Post-->
                <div class="mt-5">
                        <a href="build-an-email.html"><img src="{{asset('storage/imgs/picture (5).jpg')}}" width="612px" height="320" class="img-fluid mb-3"></a>
                        <h4>{{__('user.right2header')}}</h4>
                    <p class="lead text-justify">{{__('user.right2body')}}</p>
                </div>

                <!--Third Post-->
                <div class="mt-5">
                        <a href="email-marketing.html"><img src="{{asset('storage/imgs/picture (6).jpg')}}" width="612px" height="320" class="img-fluid mb-3"></a>
                        <h4>{{__('user.right3header')}}</h4>
                    <p class="lead text-justify">{{__('user.right3body')}}</p>
                </div>

            </div>

            <!--Right Side Section-->
            <div class="col-lg-4">
              <div id="SideBar">


                <div class="mt-5">
                    <p class="lead">{{__('user.connected')}}</p>
                    <a href="https://www.facebook.com/Life-Missionary-Evangelism-101168901822557"><i class="fa fa-facebook-square fa-3x px-2"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="{{__('user.coming')}}"><i class="fa fa-twitter-square fa-3x px-2"></i></a>
                    <a href="#"data-toggle="tooltip" data-placement="top" title="{{__('user.coming')}}"><i class="fa fa-youtube-square fa-3x px-2"></i></a>
                    <a href="#"data-toggle="tooltip" data-placement="top" title="{{__('user.coming')}}"><i class="fa fa-google-plus-square fa-3x px-2"></i></a>
                    <a href="#"data-toggle="tooltip" data-placement="top" title="{{__('user.coming')}}"><i class="fa fa-telegram fa-3x px-2" aria-hidden="true"></i></i></a>
                </div>
                <script>
                    $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                  })
                </script>




                </div>

              </div>
            </div>
        </div>
    </div>
</div>

@endsection
