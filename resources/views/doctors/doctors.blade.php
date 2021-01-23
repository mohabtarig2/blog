
@extends('layouts.app1')

@section('content')

<title>Hospital</title>
<div class="container">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">title</th>
      <th scope="col">control</th>
    </tr>
  </thead>
  <tbody>
    <!--  @if(isset($doctors) && $doctors ->count() > 0 ) -->
        @foreach ($doctors as $doctor)


    <tr>
      <th scope="row">{{$doctor->id}}</th>
      <td>{{$doctor->name}}</td>
      <td>{{$doctor->title}}</td>
      <td><a href="{{route('doctor.service',$doctor->id)}}" class="btn btn-success">عرض الخدمات</a> </td>
    </tr>
    @endforeach
    <!--@endif -->

</table>

          </tbody>
        </table>
    </div>
@stop
