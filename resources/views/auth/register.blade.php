
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaravelBnb</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div id="app">

       <register></register>

    </div>
</body>
</html>
<!--extends('layouts.appnone')

section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card">
                    <h1 class="text-center mt-3">
                  <--!{{ __('SIGN UP TO JOIN') }}
                    </h1>


                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6 offset-md-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" width="14" height="16" viewBox="0 0 14 16">
                                    <g id="Group_3" data-name="Group 3" transform="translate(-1)">
                                      <path id="Path_814" data-name="Path 814" d="M8,9H8A4.012,4.012,0,0,1,4,5V4A4.012,4.012,0,0,1,8,0H8a4.012,4.012,0,0,1,4,4V5A4.012,4.012,0,0,1,8,9Z" fill="#465a65"/>
                                      <path id="Path_815" data-name="Path 815" d="M10,11H6a4.951,4.951,0,0,0-5,5H15A4.951,4.951,0,0,0,10,11Z" fill="#465a65"/>
                                    </g>
                                  </svg>
                                <input placeholder="FULL NAME " id="name" type="text" class="focus for-icon form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strongmessage }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" width="16" height="14" viewBox="0 0 16 14">
                                    <g id="Group_5" data-name="Group 5" transform="translate(0 -1)">
                                      <path id="Path_818" data-name="Path 818" d="M15,1H1A1,1,0,0,0,0,2V14a1,1,0,0,0,1,1H15a1,1,0,0,0,1-1V2A1,1,0,0,0,15,1ZM14,13H2V6.723L7.5,9.868a1,1,0,0,0,.992,0L14,6.723Zm0-8.58L8,7.849,2,4.42V3H14Z" fill="#465a65"/>
                                    </g>
                                  </svg>

                                <input placeholder="Email "  id="email" type="email" class="focus for-icon form-control error('email') is-invalid enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{message }}</strong>
                                    </span>
                                enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="16" viewBox="0 0 1200 600">
                                    <image id="_1200px-Flag_of_the_United_Arab_Emirates.svg" data-name="1200px-Flag_of_the_United_Arab_Emirates.svg" width="1200" height="600" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABLAAAAJYAgMAAAAPiPeJAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAADFBMVEX/AAAAcy////8AAADof/NEAAAAAWJLR0QCZgt8ZAAAAAd0SU1FB+IMFQowG23bIEwAAAM3SURBVHja7dABCQAgEASwK2lJS2oGQXg4tghL/lntIkuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSNZO128mSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZA1lnXayZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFmyZMmSJUuWLFkPLrnjRPOk0niRAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTEyLTIxVDEwOjQ4OjI3KzAwOjAwET6u3QAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0xMi0yMVQxMDo0ODoyNyswMDowMGBjFmEAAAAASUVORK5CYII="/>
                                  </svg>


                                <input placeholder="mobile "  id="mobile" type="number" class="focus for-icon form-control error('mobile') is-invalid enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> message }}</strong>
                                    </span>
                                enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" width="15" height="15.8" viewBox="0 0 15 15.8">
                                    <g id="key-25" transform="translate(140 -17.3)">
                                      <g id="Group_4" data-name="Group 4" transform="translate(-140 17)" opacity="0.5">
                                        <path id="Path_817" data-name="Path 817" d="M12,9l3-3L12.7,3.7l2-2L13.3.3l-8,8a3.564,3.564,0,0,0-4.1.9,3.984,3.984,0,0,0,0,5.7,3.984,3.984,0,0,0,5.7,0c1.4-1.6-.6-3.45.1-5.5A4.586,4.586,0,0,1,9.7,6.7Z" fill="#465a65"/>
                                      </g>
                                    </g>
                                  </svg>

                                <input  placeholder="PASSWROD " id="password" type="password" class="focus for-icon form-control error('password') is-invalid enderror" name="password" required autocomplete="new-password">

                                error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>message </strong>
                                    </span>
                                enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" width="15" height="15.8" viewBox="0 0 15 15.8">
                                    <g id="key-25" transform="translate(140 -17.3)">
                                      <g id="Group_4" data-name="Group 4" transform="translate(-140 17)" opacity="0.5">
                                        <path id="Path_817" data-name="Path 817" d="M12,9l3-3L12.7,3.7l2-2L13.3.3l-8,8a3.564,3.564,0,0,0-4.1.9,3.984,3.984,0,0,0,0,5.7,3.984,3.984,0,0,0,5.7,0c1.4-1.6-.6-3.45.1-5.5A4.586,4.586,0,0,1,9.7,6.7Z" fill="#465a65"/>
                                      </g>
                                    </g>
                                  </svg>
                                <input  placeholder="CONFIRM PASSWROD " id="password-confirm" type="password" class="focus for-icon form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class=" btn-orange form-control">
                                    {{ __('Register') }}
                                </button>
                                <div class="text-center mt-5 mb-2">OR </div>
                            </div>



                            <div class="col-md-6 offset-md-3  mt-3">
                                <svg id="icons8_google_48px" xmlns="http://www.w3.org/2000/svg" width="20" height="19.875" viewBox="0 0 20 19.875">
                                    <g id="surface3933478" transform="translate(-2 -2)">
                                      <path id="Path_1098" data-name="Path 1098" d="M12,2a9.994,9.994,0,0,0-1.5,19.875V14.5h-2A.5.5,0,0,1,8,14V12.5a.5.5,0,0,1,.5-.5h2V10.184c0-2.375,1.215-3.684,3.418-3.684.891,0,1.6.063,1.625.066a.5.5,0,0,1,.457.5V8.75a.5.5,0,0,1-.5.5h-1a1,1,0,0,0-1,1V12h2a.5.5,0,0,1,.5.563l-.187,1.5a.5.5,0,0,1-.5.438H13.5v7.375A9.994,9.994,0,0,0,12,2Zm0,0" fill="#fff"/>
                                    </g>
                                  </svg>

                            <a href="{{url('redirect/facebook')}}" class="btn btn-primary form-control">
                                    with facebook
                            </a>
                            </div>
                        </div>

                        <div class="form-group row mt-3">
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
endsection
