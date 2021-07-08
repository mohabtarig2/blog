
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

	<head>
		<title>@section('title', 'home')</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

        <link
      rel="stylesheet"
      href="https://unpkg.com/filepond/dist/filepond.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css"
    />
  </head>

  <link rel="stylesheet" href="{{URL::asset('assets/css/chocolat.css')}}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token() }}">



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/css/file.css')}}" />
</head>
<body style="background: #fff">




        <nav class="nav-part" style="background:">
            <div class="container">
                <div class="logo   ">
                   AMB <span class="main-color">TENDER</span>
                </div>
                <div class="main_list " id="mainListDiv">
                    <ul class="text-right" style="direction: rtl ">


                        <li><a href="{{ route('login') }}" class="text-light">

                            <span >
                                <i class="fa fa-sign-in"></i>
                                login
                            </span>
                            </a></li>

                    </ul>
                </div>
                <div class="media_button">
                    <button class="main_media_button" id="mediaButton">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>



                </div>

            </div>
        </nav>

        <section class="home-part " id="home" class="mt-5">
            <div id="overlay"></div>
            <div class="container ">

                <div class="row " dir="rtl">


                <div class="col-md-6 form-partner">
                    <div id="app">
                        <partnership></partnership>
                    </div>
                </div>

                <div class="col-md-6 text-partner">
                   <h1 class="text-light"> Grow your business perfectly and easily </h1>
                   <p class="h2 mt-4 text-light">Get New Project and Client</p>
                                    </div>



                    </div>
                </div>



        </section>

        <section style="padding-top: 80px; padding-bottom: 80px;" >
            <div class="container " >
            <h1 class="text-center text-dark font-weight-bold"> how it's work </h1>
            <p class=" h5 text-center text-muted" style="line-height:2;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae porro debitis doloribus laudantium
                libero facere dignissimos optio consequuntur, quam hic dolores a vel quae nulla provident nisi aliquid inventore. Aliquam?
            </p>
            </div>

        </section>

        <section style="padding-top: 80px; padding-bottom: 40px; background:#eee">
            <h1 class="text-center text-dark font-weight-bold"> what you will get </h1>
            <div class="container">
            <div class="row mt-5 text-center">
                <div class="col-md-4 col-sm-12">
                        <div class="mx-auto bus-icon mt-5 mb-2" style="height: 100px; width: 100px; border-radius:50%">
                    <img src="{{asset('assets/img/customer.svg')}}" class="img-fluid mx-auto d-block" width="50%">
                        </div>
                    <h2>New Customers</h2>

                    <p class="text-muted mt-3"> Easy to understand projects through the platform </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mx-auto bus-icon mt-5 mb-2" style="height: 100px; width: 100px; border-radius:50%">
                <img src="{{asset('assets/img/increased-revenue.svg')}}" class="img-fluid mx-auto d-block" width="50%">
                    </div>
                    <h2>extra revenue</h2>
                    <p class="text-muted mt-3"> Get More projects </p>

                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mx-auto bus-icon mt-5 mb-2" style="height: 100px; width: 100px; border-radius:50%">
                <img src="{{asset('assets/img/charging-circle.svg')}}" class="img-fluid mx-auto d-block" width="50%">
                    </div>
                    <h2>project status</h2>
                    <p class="text-muted mt-3"> Ease of follow-up of the project </p>

                </div>
            </div>
            </div>

        </section>


        <section style="padding-top: 80px; padding-bottom: 40px">
            <div class="mx-auto" style="width: 500px">
            <h1 class="text-center">Ready To Join us </h1>
            <a href="#home" class="btn btn-bus text-center mt-3 btn-block mx-auto " style="padding:20px 50px;width:100%" ><b>Join Now</b></a>
            </div>
        </section>

        <script>
            var mainListDiv = document.getElementById("mainListDiv"),
    mediaButton = document.getElementById("mediaButton");

mediaButton.onclick = function () {

    "use strict";

    mainListDiv.classList.toggle("show_list");
    mediaButton.classList.toggle("active");

};
            </script>

        <main class="py-4">
            @yield('content')
        </main>

        @include('includes.footer')
</html>
