

@extends('layouts.app')

@section('content')






<div class="container">
    
  <h1 class="text-center">change password</h1>
  
  <div class="form-group row">
      <div class="col-md-4">
        
        <ul class="list-group">
          <li class="list-group-item ">
         <h1 class="text-o">Settings </h1>
            
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{url('account')}}" class="text-dark">
              Info
       </a>
            
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center" style="background:#ddd; color:fff;">
            <a href="{{url('password')}}" class="text-dark">
              Password
       </a>
           
          </li>
         
        </ul>

          </li>
         
        </ul>
      </div>
      <div class="col-md-8">
        <form method="POST" action="{{ route('register') }}">
          @csrf
      
          <div class="form-group ">
              
               
                
                  <input placeholder="Password " id="name" type="password" class="focus for-icon form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              
          </div>
          <div class="form-group">
              
            
              
              
                <input placeholder="Confirm Password " id="password" type="password" class="focus for-icon form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        </div>
      
      
      
          <div class="form-group mb-0">
              
                  <button type="submit" class=" btn-orange form-control">
                      {{ __('Update') }}
                  </button>
                 
            
          </div>
              
             
              
            
          <div class="form-group row mt-5">
              <div class="col-md-6 offset-md-3 text-center">
              </div>
      
          </div>
      </form>
      
      
@endsection
      
      
      

