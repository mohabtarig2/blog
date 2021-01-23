
@extends('layouts.app1')

@section('content')

<title>Hospital</title>
<div class="container">
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>

    </tr>
  </thead>
  <tbody>
    <!--  @if(isset($services) && $services ->count() > 0 ) -->
        @foreach ($services as $service)


    <tr>
      <th scope="row">{{$service->id}}</th>
      <td>{{$service->name}}</td>

    </tr>
    @endforeach
    <!--@endif -->

</table>

          </tbody>
        </table>
        @if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php

    ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

    <form method="post" action="{{route('save.doctor.service')}}" multibale>
        @csrf
        <!-- <input type="_token" value="csrf_token"> !-->

        <div class="form-group">
          <label for="exampleInputEmail1">أختر طبيب  </label>
          <select name="doctor_id" class="form-control">
            @foreach ($doctors as $doctor)

            <option value="{{$doctor->id}}">
                {{$doctor->name}}

            </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">أختر الخدمة او اكثر </label>
            <select name="services_id[]" class="form-control"  multiple>
                @foreach ($Allservices as $service)

                <option value="{{$service->id}}"> {{$service->name}} </option>
                @endforeach
            </select>
          </div>


          <button id="save_offer" class="btn btn-primary">{{__('messages.offer save')}}</button>
        </form>




@stop
