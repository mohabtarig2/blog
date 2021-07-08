
 @auth

 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}" />

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>LaravelBnb</title>

     <link href="https://cdn.jsdelivr.net/npm/@morioh/v-lightbox/dist/lightbox.css" rel="stylesheet">


     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">


 </head>

 <body>
     <div id="app">

        <index></index>

     </div>


 </body>



 </html>
 @endauth
 @guest
@include('includes.header')


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">



<br>
<br>
<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/img/ADS.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/ADS.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/ADS.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




</div>


<div id="app">
    <showoffers></showoffers>


</div>






  <!-- Modal -->
  <div class="modal fade" id="construction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">consurctions</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
         Beatae assumenda vel quis nesciunt! Unde, facere. Vel sequi commodi vitae! Et doloribus error magni expedita nam consequatur quis architecto at explicabo!
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="consulte" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Engineering consultances</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
         Beatae assumenda vel quis nesciunt! Unde, facere. Vel sequi commodi vitae! Et doloribus error magni expedita nam consequatur quis architecto at explicabo!
        </div>

      </div>
    </div>
  </div>
<section class="work-with-us ng-scope">



            <div class="container">
                <h2 class="section-heading">
                    Categories Tenders
                </h2>



                <div class="flex flex-wrap-centered">

                    <div class="col-md-8 col-lg-6 col-sm-12 work-col">
                        <div class="img-card">
                            <div class="img-section consulting">
                            </div>
                            <div class="details-section">
                                <div class="heading"> Engineering Consultancy </div>
                                <div class="card-desc">
                                    Join the dynamic team that makes it all happen
                                </div>
                                <a class=" main-color  float-right" data-toggle="modal" data-target="#consulte"> Explore <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-6 col-sm-12 work-col ">
                         <div class="img-card">
                             <div class="img-section construction">
                             </div>
                             <div class="details-section">
                                 <div class="heading"> consurction </div>
                                 <div class="card-desc">
                                     Reach more customers and achieve growth with us
                                 </div>
                                 <a class=" text-light float-right main-color " data-toggle="modal" data-target="#construction"> Explore <i class="fa fa-arrow-right"></i></a>
                             </div>
                         </div>
                     </div><!-- end ngIf: model.country.id !== 2 -->


                 </div>



                <div class="flex flex-wrap-centered">



                    <div class="col-md-8 col-lg-6 col-sm-12 work-col ">
                         <div class="img-card">
                             <div class="img-section  decoration">
                             </div>
                             <div class="details-section">
                                 <div class="heading"> Interior decoration </div>
                                 <div class="card-desc">
                                     Reach more customers and achieve growth with us
                                 </div>
                                 <a class=" text-light float-right main-color " data-toggle="modal" data-target="#construction"> Explore <i class="fa fa-arrow-right"></i></a>
                             </div>
                         </div>
                     </div><!-- end ngIf: model.country.id !== 2 -->

                     <div class="col-md-8 col-lg-6 col-sm-12 work-col">
                         <div class="img-card">
                             <div class="img-section havc">
                             </div>
                             <div class="details-section">
                                 <div class="heading"> HVAC companies </div>
                                 <div class="card-desc">
                                     Join the dynamic team that makes it all happen
                                 </div>
                                 <a class=" main-color  float-right" data-toggle="modal" data-target="#consulte"> Explore <i class="fa fa-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>




                <div class="flex flex-wrap-centered">



                    <div class="col-md-8 col-lg-6 col-sm-12 work-col ">
                         <div class="img-card">
                             <div class="img-section stone ">
                             </div>
                             <div class="details-section">
                                 <div class="heading"> Stone companies </div>
                                 <div class="card-desc">
                                     Reach more customers and achieve growth with us
                                 </div>
                                 <a class=" text-light float-right main-color " data-toggle="modal" data-target="#construction"> Explore <i class="fa fa-arrow-right"></i></a>
                             </div>
                         </div>
                     </div><!-- end ngIf: model.country.id !== 2 -->

                     <div class="col-md-8 col-lg-6 col-sm-12 work-col">
                         <div class="img-card">
                             <div class="img-section furniture  ">
                             </div>
                             <div class="details-section">
                                 <div class="heading"> Furniture </div>
                                 <div class="card-desc">
                                     Join the dynamic team that makes it all happen
                                 </div>
                                 <a class=" main-color  float-right" data-toggle="modal" data-target="#consulte"> Explore <i class="fa fa-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>



                <div class="flex flex-wrap-centered">



                    <div class="col-md-8 col-lg-6 col-sm-12 work-col ">
                         <div class="img-card">
                             <div class="img-section swimming">
                             </div>
                             <div class="details-section">
                                 <div class="heading"> swimming pool </div>
                                 <div class="card-desc">
                                     Reach more customers and achieve growth with us
                                 </div>
                                 <a class=" text-light float-right main-color " data-toggle="modal" data-target="#construction"> Explore <i class="fa fa-arrow-right"></i></a>
                             </div>
                         </div>
                     </div><!-- end ngIf: model.country.id !== 2 -->

                     <div class="col-md-8 col-lg-6 col-sm-12 work-col">
                         <div class="img-card">
                             <div class="img-section garden">
                             </div>
                             <div class="details-section">
                                 <div class="heading"> Oragnazition garden </div>
                                 <div class="card-desc">
                                     Join the dynamic team that makes it all happen
                                 </div>
                                 <a class=" main-color  float-right" data-toggle="modal" data-target="#consulte"> Explore <i class="fa fa-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>








</section>

















    <h1 class="text-center text-weight-bold main-color mt-5" id="how"><b>how it work</b></h1>
    <div class="how_it_work mt-5" style="position: relative">

            <div class="row mt-5">
                <div class="col-md-6 col-sm-12" >
                    <div class="">
                    <img src="{{asset('assets/img/phonebg.png')}}" class="img-fluid mx-auto d-block" width="80%" style="position: absolute;bottom:0">
                    </div>

                </div>
                <div class="col-md-6 col-sm-12 steps" >

                   <h1 class="h4 main-color mt-5"> <i class="fa fa-check-circle"></i> Add Project </h1>

            <p class="text-muted">Add the details of your project and the skills required to complete it and start receiving companies' offers </p>

            <h1 class="h4 main-color"> <i class="fa fa-check-circle"></i> Choose the right offer </h1>

            <p class="text-muted">
                Among the proposals submitted for your project, choose the proposal that best suits the
                 requirements of the project and then start the implementation phase.

            </p>

            <h1 class="h4 main-color"> <i class="fa fa-check-circle"></i> Add Project </h1>

            <p class="text-muted">Add the details of your
                project and the skills required to complete it and start receiving companies' offers </p>



                </div>

            </div>



    </div>


    <section class="area-seaction mt-5 mb-5" id="Become-Partner">
        <div class="container">

        <h1 class="text-center "><b class="main-color" >
           {{__('messages.join us')}}

            </b></h1>
        <p class="text-center">

            {{__('messages.Be a part of the Amb story')}}
        </p>


        <div class="row">
            <div class="col-md-6 text-center">
                    <div class="mx-auto bus-icon mt-5 mb-2">
                    <i class="fa fa-briefcase fa-2x text-light"></i>
                    </div>
                    <h1 class=" h3 font-weight-bold">
                     Become Partner
                    </h1>
                    <p class="text-muted">
                        Reach more customers and achieve growth with us
                    </p>
                        <a  href="{{url('partner')}}" class="btn btn-bus    text-light" style="padding:20px 50px;" target="_blank">

                        <span class="font-weight-bold"> Join Us</span>

                        </a>



            </div>


            <div class="col-md-6 text-center">
                <div class="mx-auto user-icon mt-5 mb-2">
                <i class="fa fa-user fa-2x text-light"></i>
                </div>
                <h1 class=" h3 font-weight-bold">
                    Build your Design
                </h1>
                <p class="text-muted">
                    Join the dynamic team that makes it all happen
                </p>
                    <a  href="{{url('register')}}" class="btn btn-user text-light" style="padding:20px 50px;">

                    <span class="font-weight-bold">    Add Tender</span>

                    </a>



        </div>


        </div>

    </section>
<script>

    </script>


<div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Collapsible Group Item #1
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Collapsible Group Item #2
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          Some placeholder content for the second accordion panel. This panel is hidden by default.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Collapsible Group Item #3
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
        </div>
      </div>
    </div>
  </div>


            @include('includes.footer')


            @endguest
