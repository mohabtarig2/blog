@extends('layouts.appnone')

@section('content')

<!--

review variable og the inpput when you programming


-->



    <div class="row justify-content-center mt-5">
    <div class="col-md-5 visible">
        <div class="side-box-business">
            <div class="container">

                <div class="content">
                    <h1 class="text-light">Welcome  </h1>
                    <h2>Sign up for a Business account </h2>
                </div>



            </div>

            <img src="{{asset('assets/img/side-box.jpg')}}" class="img-business img-fluid">
        </div>

    </div>

        <div class="col-md-7 col-sm-12">





            <h1 class=" h3 text-center text-secondary mt-3 mb-5">

                  {{ __('Enter the Details  you’ll use For Your Company') }}
                    </h1>


                <div>
                    <form method="POST" action="{{ route('rigesterBusiness') }}">
                        <div class="form-group row">

                            <div class="col-md-8 offset-md-2 ">
                        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                            </div>
                        </div>
                        @csrf
<div class="container">
                            <div class="form-group row">

                                <div class="col-md-8 offset-md-2 ">

                                    <input placeholder="Company Name by english " id="name" type="text" class="focus for-icon form-control @error('company_en') is-invalid @enderror" name="company_en" value="{{ old('company_en') }}" required autocomplete="name" autofocus>

                                    @error('company_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-group row">

                            <div class="col-md-8 offset-md-2 ">

                                <input placeholder="Company Name by arabic " id="name" type="text" class="focus for-icon form-control @error('company_ar') is-invalid @enderror" name="company_ar" value="{{ old('company_ar') }}" required autocomplete="name" autofocus>

                                @error('company_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                          <div class="col-md-8 offset-md-2">


                              <input placeholder="Date Create " id="name" type="date" class="focus  form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}"  >

                              @error('date')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">



                                <input placeholder="Manger Name  By Arabic"  id="manager" type="text" class="focus for-icon form-control @error('manager_ar') is-invalid @enderror" name="manager_ar" value="{{ old('manager_ar') }}" required >

                                @error('manager_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">



                                <input placeholder="Manger Name By Englijsh "  id="manager_en" type="text" class="focus for-icon form-control @error('manager_en') is-invalid @enderror" name="manager_en" value="{{ old('manager_en') }}" required >

                                @error('manager_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">


                            <div class="col-md-8 offset-md-2">
                              <select class="form-control form-control-lg  @error('Catgories') is-invalid @enderror" name="categories" value="{{ old('categories') }}" required >


                              <option  value='' class="text-muted">Catgories</option>
                              <option value="1" class="text-muted">Construcion</option>
                              <option value="2" class="text-muted">Decoration</option>
                              <option value="3" class="text-muted">Conuslate</option>
                              <option value="4" class="text-muted">another option </option>

                            </select>
                            @error('categories')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        </div>



                        <div class="form-group row">


                          <div class="col-md-8 offset-md-2">
                            <select class="form-control form-control-lg @error('emirates') is-invalid @enderror" name="emirates" value="{{ old('emirates') }}">
                            <option value= " " class="text-muted">City</option>
                            <option  value= "1"  class="text-muted">Sharja</option>
                            <option  value= "2"  class="text-muted">Dubai</option>
                            <option  value= "3" class="text-muted">ajman</option>
                            <option  value= "4" class="text-muted">Fujera</option>
                            <option  value= "5" class="text-muted">Abu Dabhi</option>
                            <option  value= "6" class="text-muted">Ras alkhima </option>
                            <option  value= "7" class="text-muted">Um aLqwain</option>
                          </select>
                          @error('emirates')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                      </div>
                      </div>


                <div class="form-group row">
                    <div class="col-md-8 offset-md-2
  ">



                        <input placeholder="Enter Your Company Email "  type="email" class="focus for-icon form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                  <div class="form-group row">
                    <div class="col-md-8 offset-md-2">


                        <input placeholder="Phone Number "  id="email" type="number" class="focus for-icon form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required >

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row">
                  <div class="col-md-8 offset-md-2">



                      <input placeholder="Mobail Number "  type="text" class="focus for-icon form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required >

                      @error('mobile')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
              <div class="col-md-8 offset-md-2">
              <input placeholder="Enter Your Password "  type="password" class="focus for-icon form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required >

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class=" text-light btn btn-primary form-control">
                                    {{ __('Register') }}
                                </button>

                            </div>
                        </div>

                        <div class="form-group row mt-5">
                            <div class="col-md-8 offset-md-2 text-center">
<b class="text-center" style="font-size: small">You have Account ?  </b>
 <b class="text-center" style="font-size: small;">  <a style="color:#E56655" href="{{ route('login') }}"> {{ __('login') }} </a> </b>
                            </div>

                        </div>
                    </form>
                </div>
            </div>





    </div>
    </div>
</div>
@endsection











<!--
                        <div class="form-group row">
                          <div class="col-md-8 offset-md-2
">
                            <label class="file-up">
                                <div class="btn-blue text-light form-control">

                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8.5 7.5c0 .83-.67 1.5-1.5 1.5H9v2H7.5V7H10c.83 0 1.5.67 1.5 1.5v1zm5 2c0 .83-.67 1.5-1.5 1.5h-2.5V7H15c.83 0 1.5.67 1.5 1.5v3zm4-3H19v1h1.5V11H19v2h-1.5V7h3v1.5zM9 9.5h1v-1H9v1zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm10 5.5h1v-3h-1v3z"/>
                                    </svg>

                             license Company
                                </div>
                           <input type="file" id="fileupload" name="pdf" data-url="/upload" multiple     hidden />
                        </label>

    <br />
    <div id="files_list"></div>
    <p id="loading"></p>
    <input type="hidden" name="file_ids" id="file_ids" value="" />
                          </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-8 offset-md-2
">
                          <label class="file-up">
                              <div class="btn-blue text-light form-control">
                              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                  <path d="M0 0h24v24H0z" fill="none"/>
                                  <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8.5 7.5c0 .83-.67 1.5-1.5 1.5H9v2H7.5V7H10c.83 0 1.5.67 1.5 1.5v1zm5 2c0 .83-.67 1.5-1.5 1.5h-2.5V7H15c.83 0 1.5.67 1.5 1.5v3zm4-3H19v1h1.5V11H19v2h-1.5V7h3v1.5zM9 9.5h1v-1H9v1zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm10 5.5h1v-3h-1v3z"/>
                                  </svg>

                           Achivment
                              </div>
                         <input type="file" id="fileupload" name="pdf" data-url="/upload" multiple    hidden />
                      </label>

  <br />
  <div id="files_list"></div>
  <p id="loading"></p>
  <input type="hidden" name="file_ids" id="file_ids" value="" />
                        </div>
                    </div>
!-->


