
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

	<head>
		<title>@section('title', 'home')</title>
		<meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0"
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




        <nav class="nav">
            <div class="container">
                <div class="logo   ">
                   AMB <span class="main-color">TENDER</span>
                </div>
                <div class="main_list" id="mainListDiv">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#offers">offers</a></li>
                        <li><a href="#tenders">Tenders</a></li>
                        <li><a href="#how">How it works</a></li>
                        <li><a href="#Become-Partner">join us</a></li>

                        <li><a href="{{ route('register') }}"  class="visible-xs">
                            <span class="btn btn-grad text-light ">register


                            </span></a></li>

                        <li><a href="{{ route('login') }}" class="visible-xs">

                            <span class="btn btn-dark">login
                                <i class="fa fa-sign-in"></i>
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

        <section class="home visible-xs" id="home">
            <div class="text-center header-text">
            <h2 class="text-uppercase font-weight-bold text-dark" > Build your home easily and quickly </h2>
                <p class=" text-uppercase text-dark" style="font-size: 12px">Get the best companies to build your project</p>
                <a href="#tenders" class="btn btn-grad text-light" style="padding:20px 50px;" ><b>GET START </b><i class="fa fa-long-arrow-right pl-4"></i> </a>
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

</html>
