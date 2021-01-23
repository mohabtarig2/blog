@extends('layouts.appnone')

@section('content')

<style>
body{
    background: #fff
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <h1 class="text-center mt-3">
            admin login
                </h1>

                <div class="card-body">

                    <form method="POST" action="{{ route('save.admin.login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6 offset-md-3 ">
                                <svg id="Component_11_2"  class="the-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 16 14">
                                    <path id="Path_818" data-name="Path 818" d="M15,1H1A1,1,0,0,0,0,2V14a1,1,0,0,0,1,1H15a1,1,0,0,0,1-1V2A1,1,0,0,0,15,1ZM14,13H2V6.723L7.5,9.868a1,1,0,0,0,.992,0L14,6.723Zm0-8.58L8,7.849,2,4.42V3H14Z" transform="translate(0 -1)" fill="#465a65"/>
                                  </svg>

                                <input id="identify" type="text" class="form-control focus for-icon @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="email Or Mobile" autocomplete="off">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6 offset-md-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" width="15" viewBox="0 0 26.4 27.733">
                                    <g id="Group_1242" data-name="Group 1242" transform="translate(0 -0.3)">
                                      <path id="Path_817" data-name="Path 817" d="M21.12,15.571l5.28-5.266L22.352,6.268l3.52-3.511L23.408.3,9.328,14.342a6.284,6.284,0,0,0-7.216,1.58,6.981,6.981,0,0,0,0,10.005,7.026,7.026,0,0,0,10.032,0,7.231,7.231,0,0,0,.176-9.654l4.752-4.739Z" fill="#465a65"/>
                                    </g>
                                  </svg>

                                <input id="password" type="password" class="form-control focus for-icon @error('password') is-invalid @enderror" name="password" required placeholder="password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label " for="remember">
                                        {{ __('Remember Me') }}
                                        @if (Route::has('password.request'))
                                            <a class="text-dark forgot-your-password" href="{{ route('password.request') }}">

                                                {{ __('Forgot Your Password?') }}

                                            </a>
                                        @endif
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class=" btn-orange form-control">

                                    {{ __('Login') }}

                                </button>

                            </div>


                        </div>
                        <div class="text-center mt-5 mb-2">OR </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-3">

                                <svg id="icons8_google_48px" xmlns="http://www.w3.org/2000/svg" width="20" height="19.875" viewBox="0 0 20 19.875">
                                    <g id="surface3933478" transform="translate(-2 -2)">
                                      <path id="Path_1098" data-name="Path 1098" d="M12,2a9.994,9.994,0,0,0-1.5,19.875V14.5h-2A.5.5,0,0,1,8,14V12.5a.5.5,0,0,1,.5-.5h2V10.184c0-2.375,1.215-3.684,3.418-3.684.891,0,1.6.063,1.625.066a.5.5,0,0,1,.457.5V8.75a.5.5,0,0,1-.5.5h-1a1,1,0,0,0-1,1V12h2a.5.5,0,0,1,.5.563l-.187,1.5a.5.5,0,0,1-.5.438H13.5v7.375A9.994,9.994,0,0,0,12,2Zm0,0" fill="#fff"/>
                                    </g>
                                  </svg>


                                <a type="submit" class=" the-line-input btn btn-primary  form-control">

                                    {{ __(' with facebook') }}

                                </a>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <svg id="icons8_google_48px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                    <image id="icons8_google_48px-2" data-name="icons8_google_48px" width="18" height="18" xlink:href="data:image/png;base64,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"/>
                                  </svg>


                                <a type="submit" class="for-icon the-line-input btn btn-light  form-control">

                                    {{ __(' with google') }}

                                </a>

                            </div>
                        </div>

                        <div class="form-group row mt-5">
                            <div class="col-md-6 offset-md-3 text-center">
<b class="text-center" style="font-size: small"> Don't have Account ?  </b> <b class="text-center" style="font-size: small;">  <a style="color:#E56655" href="{{ route('register') }}"> {{ __('sign up') }} </a> </b>
                            </div>

                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
