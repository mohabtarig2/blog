@extends('layouts.app1')

@section('content')

        <title>@yield('title','home')</title>

        <ul>
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
</ul>

        <!-- Fonts -->
        <div class="container {{__('messages.text-d')}}" dir="{{__('messages.dir')}}">
@if(Session::has('success'))
<div class="alert alert-success"> تم تسجيل العرض بنجاح </div>
@endif
        <form method="post" action="{{Route('offers.store')}}" enctype="multipart/form-data">
          @csrf
          <!-- <input type="_token" value="csrf_token"> !-->

          <div class="form-group">
            <label for="exampleInputEmail1">choose photo</label>
            <input type="file" class="form-control" name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('photo')
                <div class="text text-danger">{{$message}}</div>
            @enderror
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">{{__('messages.offer name ar')}}</label>
              <input type="text" class="form-control" name="name_ar" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name_ar')
                  <div class="text text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">{{__('messages.offer name en')}}</label>
              <input type="text" class="form-control" name="name_en" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              @error('name_en')
                  <div class="text text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">{{__('messages.price offer')}}</label>
              <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="offer price">
              @error('price')
              <div class="text text-danger">{{$message}}</div>
          @enderror

            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">{{__('messages.offer details ar')}}</label>
              <input type="text" name="details_ar"class="form-control" id="exampleInputPassword1" placeholder="details">
              @error('details_ar')
              <div class="text text-danger">{{$message}}</div>
          @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">{{__('messages.offer details en')}}</label>
              <input type="text" name="details_en"class="form-control" id="exampleInputPassword1" placeholder="details">
              @error('details_en')
              <div class="text text-danger">{{$message}}</div>
          @enderror
            </div>


            <button type="submit" class="btn btn-primary">{{__('messages.offer save')}}</button>
          </form>
