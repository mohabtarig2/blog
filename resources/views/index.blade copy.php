
@include('includes.header');


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

<section class="page-bg page-banner" style=" min-height:100%;">
	<div class="page-heading">
        <img src="{{asset('assets/img/logo2.png')}}" width="200">
        <h2 class="text-light">
        Discover The Villa As You Want!!

        </h2>
        <div class="row">
            <div class="col-10">
                <input type="search"  class="search-location form-control" placeholder="search for villa , land">
            </div>
<div class="col-2">
    <button id="banner-home " class="text-light btn-search " style="padding: 16px 37px!important;border:none"> let's Go</button>

</div>
        </div>



    </div>


</section>

<div class="container mt-2 mb-2">
    <br>
    <h1  class="text-center text-o mt-5 mb-3">

    </h1>

<div id="app"></div>
    <div class="row">


        <div class="col-md-3">
            <a href="{{url('villas')}}" class="area-item">
                <img src="{{asset('assets/img/villa.jpg')}}" alt="">

                <span>Villa</span>
            </a>

        </div>


  <div class="col-md-3">
    <a href="#" class="area-item">
        <img src="{{asset('assets/img/lands.jpg')}}" alt="">

        <span>Lands</span>
    </a>

</div>

<div class="col-md-3">
    <a href="#" class="area-item">
        <img src="{{asset('assets/img/farms.jpg')}} " alt="">

        <span>Farms</span>
    </a>

</div>


<div class="col-md-3">
<a href="#" class="area-item">
<img src="{{asset('assets/img/bulidings.jpg')}}" alt="">

<span>Bulding</span>
</a>

</div>

</div>








    <div class="text-left text-dark mt-5 mb-3">
        <h1>TRINDING</h1>
            <p class=" text-left">Explore curated lists of top Villa and best price <span class="text-o">within uae</span></p>

    </div>






  <div class="owl-carousel owl-theme owl-loaded mb-5">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
            <div class="owl-item"><img class="img-fluid" src=" {{asset('assets/img/header.jpg')}}" alt="Third slide"></div>
        </div>
    </div>
  </div>



     <div class=" mt-5">
         <div class=" head-recommended">
            <p class=" text-right badge badge-danger ">Farms Recommended</p>
            <small class="text-o mb-0 view-recomended" >VIEW ALL</small>
         </div>





  <div class="Recommended">
  <div class="row">


    <div class="col-md-3">
        <a href="#" class="area-item">
            <img src="{{asset('assets/img/villa.jpg')}}" alt="">

            <span class="mr-5">
                <strong class=" mb-3 text-right">Villa</strong>
                  <br>
                  <i class="fa fa-map text-dark"></i> location :  <b class="text-o">sharja</b>
                  <br>
                  <i class="fa fa-money text-dark"></i> price :  <b class="text-o">100,0000 Aed</b>


              </span>
        </a>

    </div>


<div class="col-md-3">
<a href="#" class="area-item">
    <img src="{{asset('assets/img/lands.jpg')}}" alt="">

    <span class="mr-5">
        <strong class=" mb-3 text-right">farm</strong>
          <br>
          <i class="fa fa-map text-dark"></i> location :  <b class="text-o">ajman</b>
          <br>
          <i class="fa fa-money text-dark"></i> price :  <b class="text-o">582,00 Aed</b>


      </span>
</a>

</div>

<div class="col-md-3">
<a href="#" class="area-item">
    <img src="{{asset('assets/img/farms.jpg')}} " alt="">

    <span class="mr-5">
      <strong class=" mb-3 text-right">farm</strong>
        <br>
        <i class="fa fa-map text-dark"></i> location :  <b class="text-o">sharja</b>
        <br>
        <i class="fa fa-money text-dark"></i> price :  <b class="text-o">500,00 Aed</b>


    </span>
</a>

</div>


<div class="col-md-3">
<a href="#" class="area-item">
<img src="{{asset('assets/img/bulidings.jpg')}}" alt="">

<span class="mr-5">
    <strong class=" mb-3 text-right">farm</strong>
      <br>
      <i class="fa fa-map text-dark"></i> location :  <b class="text-o">dubai</b>
      <br>
      <i class="fa fa-money text-dark"></i> price :  <b class="text-o">250,00 Aed</b>


  </span>
</a>

</div>

</div>
  </div>


  <div class=" mt-5">
         <div class=" head-recommended">
            <p class=" text-right badge badge-danger ">Farms Recommended</p>
            <a href="{{url('villas')}}" class="text-o mb-0 view-recomended" >VIEW ALL</a>
         </div>





  <div class="Recommended">
  <div class="row">


    <div class="col-md-3">
        <a href="#" class="area-item">
            <img src="{{asset('assets/img/villa.jpg')}}" alt="">

            <span class="mr-5">
                <strong class=" mb-3 text-right">Villa</strong>
                  <br>
                  <i class="fa fa-map text-dark"></i> location :  <b class="text-o">sharja</b>
                  <br>
                  <i class="fa fa-money text-dark"></i> price :  <b class="text-o">100,0000 Aed</b>


              </span>
        </a>

    </div>


<div class="col-md-3">
<a href="#" class="area-item">
    <img src="{{asset('assets/img/lands.jpg')}}" alt="">

    <span class="mr-5">
        <strong class=" mb-3 text-right">farm</strong>
          <br>
          <i class="fa fa-map text-dark"></i> location :  <b class="text-o">ajman</b>
          <br>
          <i class="fa fa-money text-dark"></i> price :  <b class="text-o">582,00 Aed</b>


      </span>
</a>

</div>

<div class="col-md-3">
<a href="#" class="area-item">
    <img src="{{asset('assets/img/farms.jpg')}} " alt="">

    <span class="mr-5">
      <strong class=" mb-3 text-right">farm</strong>
        <br>
        <i class="fa fa-map text-dark"></i> location :  <b class="text-o">sharja</b>
        <br>
        <i class="fa fa-money text-dark"></i> price :  <b class="text-o">500,00 Aed</b>


    </span>
</a>

</div>


<div class="col-md-3">
<a href="#" class="area-item">
<img src="{{asset('assets/img/bulidings.jpg')}}" alt="">

<span class="mr-5">
    <strong class=" mb-3 text-right">farm</strong>
      <br>
      <i class="fa fa-map text-dark"></i> location :  <b class="text-o">dubai</b>
      <br>
      <i class="fa fa-money text-dark"></i> price :  <b class="text-o">250,00 Aed</b>


  </span>
</a>

</div>

</div>
  </div>
  <div class=" mt-5">
    <div class=" head-recommended">
       <p class=" text-right badge badge-danger ">Farms Recommended</p>
       <small class="text-o mb-0 view-recomended" >VIEW ALL</small>
    </div>





<div class="Recommended">
<div class="row">


<div class="col-md-3">
   <a href="#" class="area-item">
       <img src="{{asset('assets/img/villa.jpg')}}" alt="">

       <span class="mr-5">
           <strong class=" mb-3 text-right">Villa</strong>
             <br>
             <i class="fa fa-map text-dark"></i> location :  <b class="text-o">sharja</b>
             <br>
             <i class="fa fa-money text-dark"></i> price :  <b class="text-o">100,0000 Aed</b>


         </span>
   </a>

</div>


<div class="col-md-3">
<a href="#" class="area-item">
<img src="{{asset('assets/img/lands.jpg')}}" alt="">

<span class="mr-5">
   <strong class=" mb-3 text-right">farm</strong>
     <br>
     <i class="fa fa-map text-dark"></i> location :  <b class="text-o">ajman</b>
     <br>
     <i class="fa fa-money text-dark"></i> price :  <b class="text-o">582,00 Aed</b>


 </span>
</a>

</div>

<div class="col-md-3">
<a href="#" class="area-item">
<img src="{{asset('assets/img/farms.jpg')}} " alt="">

<span class="mr-5">
 <strong class=" mb-3 text-right">farm</strong>
   <br>
   <i class="fa fa-map text-dark"></i> location :  <b class="text-o">sharja</b>
   <br>
   <i class="fa fa-money text-dark"></i> price :  <b class="text-o">500,00 Aed</b>


</span>
</a>

</div>


<div class="col-md-3">
<a href="#" class="area-item">
<img src="{{asset('assets/img/bulidings.jpg')}}" alt="">

<span class="mr-5">
<strong class=" mb-3 text-right">farm</strong>
 <br>
 <i class="fa fa-map text-dark"></i> location :  <b class="text-o">dubai</b>
 <br>
 <i class="fa fa-money text-dark"></i> price :  <b class="text-o">250,00 Aed</b>


</span>
</a>

</div>

</div>
</div>




  <h1 class="text-muted mt-5 ">Top Companies</h1>
  <div class="row ">



<div class="col-md-4">
    <div class="top-company mt-3">

    <div class="top-c">
        <p class="text-left text-o">Top Construction copmany</p>
        <img src="https://via.placeholder.com/60" class="rounded-circle">
        <div class="company_name">
        <p class="">MOHAB COMPANY

            <span class="text-muted" >260 reviws , 156 project </span>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" class="company_star" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" viewBox="0 0 48 48">
            <image id="icons8_star_48px_1" width="48" height="48" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADxklEQVRYCe1Yz29MURQ+507HwoaEBLGQ+DElpJ1hiD/ACu1OoqlGE2JBsBASYTEkUlJW2IhfSQ1NamWKjb+gWiqNpIOwwoYIEQnj3eM7aV87Y8bMu5P3tGIm98w7997zvvt958y9fa9EjU8jA40M/NMZ4KjYj+xqX2nEPlJ8y2bLhlv3XqkftpmwAX28mLVn4S9Tg5AeXCNpkVRgpKO9xRg7CsY+vo2RTbZkH4xhLNQWSQWM8U6DpU8eLhlPjI6pH6oVLxIKcIXs+7iRVMH46GFdK2Tfh46kCqFW4Gln20YiGfIZV7iKGLtpfd+D4QpzdQ2FXAF7ogYLZs/UiqkBUTodWgUCZN9fOdQqhFiBmtn3BYRahVAq4JB9X0RoVXAWMNzRtjBmuFlEVjNLMxjBWDfvEvgOjd8TWWx4zovwC2Ye96zk03dyHxxAqKKA4X0b4vFvS5dbkjUkkhCiZgSuBnAzbAEsyvYR4HmsOY418yScN4bHC3Pfvk5fGSlgrqQhpqRPo53be4T4CI7DeOnMTPe4wCQXktnB48VMyjYxlB+afeSVssTB7aB6xVYuQOh6ccBs8pm4jFuZgNTtQVSALs8m4spFhC61ZnOH1S+2sj2gkygVYy9chH8ANuNNyWtiQRbUSulgrHTA7yFyVoioRl65/lGATs60iFrklWNVARowUyKCkFd+NQVo0N8WEZS8cis7hXTwd4NKSa5K43SSmxT1R+hGKpE+rGsGWQpxQcImYiSTMaMvH18j4m6K4gPyyUR6L2cyNii8kwAFfda1bZ21PKZ+2MaW1yXv5J674BqXYI31LOtDnbqhG976nbGdBRgh50WCKuU6sJ0FCLM+Ugfl5BSHp01nbGcBeFJ1XiSoChzXzth1COBEUEJ1xDljOwkY6t66GBWYVwexoLfMH+toXxQ0WOOcBDR9jzmXWBdxsQL/dFrDSYBh6wL+Ae+zR/HWfQwCPsICNWbjsgY5CRAT6Aj9QkKZ7+StSN3OnU/dGuyFvxxCTkHBF1jVhucgp2O6qSra75NS7Y8Yf2axPfHC3MtrBwa+Ft+6OftQiWee79hxvhD/dkDY4MVcKu4lDpakKXg3AYwTCCmaunvC+YGNfVU8cybVf//dxFDl70lh557sbO/jJjqJf9nsQeQc2HQTSkx3antuAkSKTwgPP5WsiXGmtW/wTe2lpiPW9997h97+Z11tvdaTDH5enejHYNpw0uklmDntASa6BNhPsLtCsRa8p+5u7cs5kce9U03vVQzFwuBd2KfJNeA2WiMDjQz8Fxn4BQG/Ox8KA0jaAAAAAElFTkSuQmCC"/>
          </svg>
        </div>
        <br>


    </div>


</div>





</div>
<div class="col-md-4">
    <div class="top-company mt-3">

    <div class="top-c">
        <p class="text-left text-o">Top Consulte copmany</p>
        <img src="https://via.placeholder.com/60" class="rounded-circle">
        <div class="company_name">
        <p class="">MOHAB COMPANY

            <span class="text-muted" >260 reviws , 156 project </span>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" class="company_star" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" viewBox="0 0 48 48">
            <image id="icons8_star_48px_1" width="48" height="48" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADxklEQVRYCe1Yz29MURQ+507HwoaEBLGQ+DElpJ1hiD/ACu1OoqlGE2JBsBASYTEkUlJW2IhfSQ1NamWKjb+gWiqNpIOwwoYIEQnj3eM7aV87Y8bMu5P3tGIm98w7997zvvt958y9fa9EjU8jA40M/NMZ4KjYj+xqX2nEPlJ8y2bLhlv3XqkftpmwAX28mLVn4S9Tg5AeXCNpkVRgpKO9xRg7CsY+vo2RTbZkH4xhLNQWSQWM8U6DpU8eLhlPjI6pH6oVLxIKcIXs+7iRVMH46GFdK2Tfh46kCqFW4Gln20YiGfIZV7iKGLtpfd+D4QpzdQ2FXAF7ogYLZs/UiqkBUTodWgUCZN9fOdQqhFiBmtn3BYRahVAq4JB9X0RoVXAWMNzRtjBmuFlEVjNLMxjBWDfvEvgOjd8TWWx4zovwC2Ye96zk03dyHxxAqKKA4X0b4vFvS5dbkjUkkhCiZgSuBnAzbAEsyvYR4HmsOY418yScN4bHC3Pfvk5fGSlgrqQhpqRPo53be4T4CI7DeOnMTPe4wCQXktnB48VMyjYxlB+afeSVssTB7aB6xVYuQOh6ccBs8pm4jFuZgNTtQVSALs8m4spFhC61ZnOH1S+2sj2gkygVYy9chH8ANuNNyWtiQRbUSulgrHTA7yFyVoioRl65/lGATs60iFrklWNVARowUyKCkFd+NQVo0N8WEZS8cis7hXTwd4NKSa5K43SSmxT1R+hGKpE+rGsGWQpxQcImYiSTMaMvH18j4m6K4gPyyUR6L2cyNii8kwAFfda1bZ21PKZ+2MaW1yXv5J674BqXYI31LOtDnbqhG976nbGdBRgh50WCKuU6sJ0FCLM+Ugfl5BSHp01nbGcBeFJ1XiSoChzXzth1COBEUEJ1xDljOwkY6t66GBWYVwexoLfMH+toXxQ0WOOcBDR9jzmXWBdxsQL/dFrDSYBh6wL+Ae+zR/HWfQwCPsICNWbjsgY5CRAT6Aj9QkKZ7+StSN3OnU/dGuyFvxxCTkHBF1jVhucgp2O6qSra75NS7Y8Yf2axPfHC3MtrBwa+Ft+6OftQiWee79hxvhD/dkDY4MVcKu4lDpakKXg3AYwTCCmaunvC+YGNfVU8cybVf//dxFDl70lh557sbO/jJjqJf9nsQeQc2HQTSkx3antuAkSKTwgPP5WsiXGmtW/wTe2lpiPW9997h97+Z11tvdaTDH5enejHYNpw0uklmDntASa6BNhPsLtCsRa8p+5u7cs5kce9U03vVQzFwuBd2KfJNeA2WiMDjQz8Fxn4BQG/Ox8KA0jaAAAAAElFTkSuQmCC"/>
          </svg>
        </div>
        <br>


    </div>


</div>



</div>
<div class="col-md-4">
    <div class="top-company mt-3">

    <div class="top-c">
        <p class="text-left text-o">Top Consulte copmany</p>
        <img src="https://via.placeholder.com/60" class="rounded-circle">
        <div class="company_name">
        <p class="">MOHAB COMPANY

            <span class="text-muted" >260 reviws , 156 project </span>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" class="company_star" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" viewBox="0 0 48 48">
            <image id="icons8_star_48px_1" width="48" height="48" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADxklEQVRYCe1Yz29MURQ+507HwoaEBLGQ+DElpJ1hiD/ACu1OoqlGE2JBsBASYTEkUlJW2IhfSQ1NamWKjb+gWiqNpIOwwoYIEQnj3eM7aV87Y8bMu5P3tGIm98w7997zvvt958y9fa9EjU8jA40M/NMZ4KjYj+xqX2nEPlJ8y2bLhlv3XqkftpmwAX28mLVn4S9Tg5AeXCNpkVRgpKO9xRg7CsY+vo2RTbZkH4xhLNQWSQWM8U6DpU8eLhlPjI6pH6oVLxIKcIXs+7iRVMH46GFdK2Tfh46kCqFW4Gln20YiGfIZV7iKGLtpfd+D4QpzdQ2FXAF7ogYLZs/UiqkBUTodWgUCZN9fOdQqhFiBmtn3BYRahVAq4JB9X0RoVXAWMNzRtjBmuFlEVjNLMxjBWDfvEvgOjd8TWWx4zovwC2Ye96zk03dyHxxAqKKA4X0b4vFvS5dbkjUkkhCiZgSuBnAzbAEsyvYR4HmsOY418yScN4bHC3Pfvk5fGSlgrqQhpqRPo53be4T4CI7DeOnMTPe4wCQXktnB48VMyjYxlB+afeSVssTB7aB6xVYuQOh6ccBs8pm4jFuZgNTtQVSALs8m4spFhC61ZnOH1S+2sj2gkygVYy9chH8ANuNNyWtiQRbUSulgrHTA7yFyVoioRl65/lGATs60iFrklWNVARowUyKCkFd+NQVo0N8WEZS8cis7hXTwd4NKSa5K43SSmxT1R+hGKpE+rGsGWQpxQcImYiSTMaMvH18j4m6K4gPyyUR6L2cyNii8kwAFfda1bZ21PKZ+2MaW1yXv5J674BqXYI31LOtDnbqhG976nbGdBRgh50WCKuU6sJ0FCLM+Ugfl5BSHp01nbGcBeFJ1XiSoChzXzth1COBEUEJ1xDljOwkY6t66GBWYVwexoLfMH+toXxQ0WOOcBDR9jzmXWBdxsQL/dFrDSYBh6wL+Ae+zR/HWfQwCPsICNWbjsgY5CRAT6Aj9QkKZ7+StSN3OnU/dGuyFvxxCTkHBF1jVhucgp2O6qSra75NS7Y8Yf2axPfHC3MtrBwa+Ft+6OftQiWee79hxvhD/dkDY4MVcKu4lDpakKXg3AYwTCCmaunvC+YGNfVU8cybVf//dxFDl70lh557sbO/jJjqJf9nsQeQc2HQTSkx3antuAkSKTwgPP5WsiXGmtW/wTe2lpiPW9997h97+Z11tvdaTDH5enejHYNpw0uklmDntASa6BNhPsLtCsRa8p+5u7cs5kce9U03vVQzFwuBd2KfJNeA2WiMDjQz8Fxn4BQG/Ox8KA0jaAAAAAElFTkSuQmCC"/>
          </svg>
        </div>
        <br>


    </div>


</div>



</div>


  </div>

  <div class="get_app">


  </div>


  <script>
$('.owl-carousel').owlCarousel({
    loop:true,

    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
})
    </script>


<script>
      new Vue({
        el: "#app",
        components: {
          FilePond: vueFilePond.default(FilePondPluginImagePreview),
        },
      });
    </script>



