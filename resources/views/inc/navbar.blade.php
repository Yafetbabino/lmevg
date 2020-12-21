<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url(App()->getLocale().'/') }}">
            {{ __('welcome.intro1') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{asset('/')}}">{{__('welcome.intro1')}} <span class="sr-only">(current)</span></a>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/#vision')}}">{{__('welcome.vision')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/#mission')}}">{{__('welcome.mission')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/#goal')}}">{{__('welcome.goal')}}</a>
                  </li>
                  @role('superadministrator')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url(App()->getLocale().'/admin')}}">{{__('welcome.adminsite')}}</a>
                    </li>
                    @endrole

                    @role('user')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url(App()->getLocale().'/user')}}">{{__('welcome.usersite')}}</a>
                    </li>
                    @endrole

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                    {{-- Language change setup --}}
                    <li class="nav-item dropdown d-md-down-none">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="border-style: solid; border-width: 0px 2px 0px 0px;">

                                    @if (App::getLocale() =='et')
                                    <img src="{{asset('storage/flags/et.png')}}" alt="ET"  class="rounded-circle" height="15px" width="20px">
                                    አማርኛ
                                    @endif
                                    @if (App::getLocale() =='en')
                                    <img src="{{asset('storage/flags/us.png')}}" alt="EN"  class="rounded-circle" height="15px" width="20px">
                                    English
                                    @endif

                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('locale.setting', 'et')}}">
                                    <img src="{{asset('storage/flags/et.png')}}" alt="ET" class="rounded-circle" height="15px" width="20px">
                                    አማርኛ
                                </a>
                                <a class="dropdown-item" href="{{ route('locale.setting', 'en')}}">
                                    <img src="{{asset('storage/flags/us.png')}}" alt="EN"  class="rounded-circle" height="15px" width="20px">
                                    English
                                </a>

                        </div>

                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login', app()->getLocale()) }}">{{ __('welcome.Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register', app()->getLocale()) }}">{{ __('welcome.Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->firstName." ".Auth::user()->fatherName  }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @role('user')
                            <a class="dropdown-item text-success fa fa-certificate" aria-hidden="true"
                                {{-- href="{{ route('download',app()->getLocale()) }}">{{__('welcome.pdf')}} --}}
                                href="{{ url(app()->getLocale().'/download') }}"> {{__('welcome.pdf')}}
                            </a>

                            <a class="dropdown-item fa fa-pencil-square-o" aria-hidden="true"
                                href="{{url(App()->getLocale().'/edituser')}}"> {{__('welcome.Edituser')}}
                            </a>
                            @endrole

                            <a class="dropdown-item text-danger fa fa-sign-out" aria-hidden="true" href="{{ route('logout', app()->getLocale()) }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('welcome.Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
