<header>

    <div id="ap">
        <nav class="navbar navbar-expand-md navbar-light   bg-transparent shadow-sm " >

                <a class="navbar-brand" href="{{ url('/') }}">
				   <!-- {{ config('app.name', 'Home') }} -->
                  <h3 class="text-light">AMB DELAER</h3>



                </a>
                <button class="navbar-toggler" STYLE="box-shadow: none;border-style: none;
                border-color:none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">

                    <svg xmlns="http://www.w3.org/2000/svg" class="navbar-toggler-icon" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" viewBox="0 0 48 48">
                        <image id="icons8_menu_48px" width="48" height="48" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAAdUlEQVRYCe3WIQ7AIAwFUJjh/sdFsSABR5au4pEgaAItT/1SLAIECBAgQOA/gbq3Hr2PvZbpXFtbZn4yDXcziw/cqLlDgAABAgS+ElhyxXxUFpoKgVsWCsTWigABAgQIHAKy0EESXJCFgsG1I0CAAAECBFIJvO5zDBa02sLSAAAAAElFTkSuQmCC"/>
                      </svg>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="nav-item">
                            <a class="nav-link text-light" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                        @guest
                            <li class="nav-item">
                                <a class="nav-link  text-center mb-1 text-light round" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link  text-light round" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-light dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</header>

<section class="page-bg page-banner" style=" min-height:100%;">

    <div class="page-heading" dir="{{__('messages.dir')}}">

        <h1 class="text-light mt-5">

            {{ __('messages.more than number villa') }}
        </h1>
        <div class="row ">
            <div class="col-10">
                <img   src="{{asset('assets/icons/icons8_region_128px_1.png')}}" class="icon_location" style={{ __('messages.right-dir') }} >

                <input type="search"  class="search-location form-control" placeholder="{{__('messages.locations search') }}" style="{{_('messages.icons-locations')}}">
            </div>
<div class="col-2">
    <button  class="text-light btn-search " style="padding: 16px 50px!important;border:none">{{ __('messages.lets go') }}</button>

</div>
        </div>



    </div>


</section>
<br>
<br>

<section class="  mt-5">
    <div class="container">
    <div class="apps-links">
    <h1 class="text-center "><b class="main-color">
        {{__('messages.Whatever you want')}}


        <script src="{{mix('js/app.js')}}"></script>

        </b></h1>
    <p class="text-center">

        {{__('messages.Design your villa')}}
    </p>
    <div class="links text-center">
    <img src="{{asset('assets/buttons/logo_appstore.svg')}}" alt="">
    <img src="{{asset('assets/buttons/logo_playstore.svg')}}" alt="">
    </div>
    </div>
    </div>

</section>
     <div class="container">
        <div class="catogries">
            <div class="boxes box1">

                <div class="overlay">
                    <div class="text">
                        {{__('messages.Engineering consultances')}}
                        </div>
                  </div>


            </div>
            <div class="boxes box2">


                    <div class="overlay">
<div class="text">
{{__('messages.Construction')}}
</div>
</div>


            </div>
            <div class="boxes box3">

                <div class="overlay">
                    <div class="text">
                        {{__('messages.interior decorations')}}
                         </div>
                  </div>



            </div>
            <div class="boxes box4">


                <div class="overlay">
                    <div class="text">
                        {{__('messages.Stone companies')}}
                         </div>
                  </div>


            </div>
            <div class="boxes box5">

                <div class="overlay">
                    <div class="text">
                        {{__('messages.HVAC companies')}}
                        </div>
                  </div>

            </div>
            <div class="boxes box6">

                <div class="overlay">
                    <div class="text">
                        {{__('messages.Furniture companies')}}
                    </div>
                  </div>
                <span></span>
            </div>

        </div>
    </div>


    <section class="area-seaction  mt-5">
        <div class="container">

        <h1 class="text-center "><b class="main-color">
           {{__('messages.join us')}}

            </b></h1>
        <p class="text-center">

            {{__('messages.Be a part of the Amb story')}}
        </p>
        <div class="row">
            <div class="col-md-6">
               <div class="partner">
                <div class="partner-img1"> </div>
                <div class="partner-content">
                    <h2 class=" font-weight-bold">
                        Become Partner
                    </h2>
                    <p>
                        Reach more customers and achieve growth with us
                    </p>
                        <a  href="{{url('bussines')}}" class="btn btn-search">Find Out More </a>

                </div>

            </div>
        </div>
        <div class="col-md-6">
               <div class="partner">
                <div class="partner-img2"> </div>
                <div class="partner-content">
                    <h2 class=" font-weight-bold">
                        Build your Design
                    </h2>
                    <p>
                        Join the dynamic team that makes it all happen
                    </p>
                        <a  class="btn btn-search">Find Villa </a>

                </div>

            </div>
        </div>

    </section>


    <section class="area-seaction  mt-5 mb-5">
        <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h2 class="font-weight-bold"> Discover the new Amb app</h2>
                <p>Get what you need, when you need it.</p>
                <div class="links text-left" style="margin:none">
                    <img src="{{asset('assets/buttons/logo_appstore.svg')}}" alt="">
                    <img src="{{asset('assets/buttons/logo_playstore.svg')}}" alt="">
                    </div>

        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/img/phone.JPG')}}"class="app-img img-fluid" width="80%">
        </div>

    </section>
