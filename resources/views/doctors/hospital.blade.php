
@extends('layouts.app1')

@section('content')

<title>Hospital</title>
<div class="container">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">control</th>
    </tr>
  </thead>
  <tbody>
    <!--  @if(isset($hospitals) && $hospitals ->count() > 0 ) -->
        @foreach ($hospitals as $hospital)


    <tr>
      <th scope="row">{{$hospital->id}}</th>
      <td>{{$hospital->name}}</td>
      <td>{{$hospital->address}}</td>
      <td><a class="btn btn-success" href="doctors/{{$hospital->id}}">عرض الاطباء</a>
        <a href="{{route('hospital.delete',$hospital ->id)}}" class="btn btn-danger"> حذف مشفى </a>
    </td>
    </tr>
    @endforeach
    <!--@endif -->

</table>

          </tbody>
        </table>
    </div>
@stop
