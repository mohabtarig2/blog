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
@if(Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}} </div>
@endif


        <!-- Fonts -->    <div class="container {{__('messages.text-d')}}" dir="{{__('messages.dir')}}">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">{{__('messages.offer name')}}</th>
              <th scope="col">{{__('messages.price offer')}}</th>
              
              <th scope="col">{{__('messages.offer image')}}</th>
              <th scope="col">{{__('messages.offer details')}}</th>
              <th scope="col">{{__('messages.operation')}}</th>

            </tr>
          </thead>
          <tbody>
            @foreach($offers as $offer)
                
            
            <tr>
              <td>{{$offer->id}}</td>
              <td>{{$offer->name}}</td>
              <td>{{$offer->price}}</td>
              <td>
                <img  src="{{asset('images/offers/'.$offer->photo.'')}}" width="100">
              </td>
              <td>{{$offer->details}}</td>
              <td>
                <a href="{{url('offers/edit/'.$offer->id.'')}}" class=" btn btn-success">{{__('messages.update')}}</a>
                <a href="{{route('offers.delete',$offer->id)}}" class=" btn btn-danger">{{__('messages.delete')}}</a>
              </td>

            </tr>
            @endforeach
          
          </tbody>
        </table>
        