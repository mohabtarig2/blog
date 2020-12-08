

@extends('layouts.app')

@section('content')






<div class="container">
    
  <h1 class="text-center">Information account</h1>
  
  <div class="form-group row">
      <div class="col-md-4">
        
        <ul class="list-group">
          <li class="list-group-item ">
         <h1 class="text-o">Settings </h1>
            
          <li class="list-group-item d-flex justify-content-between align-items-center" style="background: #ddd;">
            <a href="{{url('account')}}" class="text-dark">
              Info
       </a>
            
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
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
              
              
                
                  <input placeholder="password " id="name" type="password" class="focus for-icon form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              
          </div>
          <div class="form-group">
              
            
              
              
                <input placeholder="Date Create " id="name" type="password" class="focus for-icon form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
        </div>
      
      
          <div class="form-group">
            
                
                
                    
                  <input placeholder="Manger Name "  id="email" type="text" class="focus for-icon form-control @error('email') is-invalid @enderror" name="Manger" value="{{ old('email') }}" required autocomplete="email">
      
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              
          </div>
      
       
          <div class="form-group ">
           
              <label>license Company </label> <sup class="badge badge-danger" style="font-size:8px"> PDF</sup>
             <input type="file" id="fileupload" name="photos[]" data-url="/upload" multiple />
      <br />
      <div id="files_list"></div>
      <p id="loading"></p>
      <input type="hidden" name="file_ids" id="file_ids" value="" />     
            
        </div>
        <div class="form-group ">
          
            <label>Achievements </label> <sup class="badge badge-danger" style="font-size:8px"> PDF</sup>
           <input type="file" id="fileupload" name="photos[]" data-url="/upload" multiple />
      <br />
      <div id="files_list"></div>
      <p id="loading"></p>
      <input type="hidden" name="file_ids" id="file_ids" value="" />     
          
      </div>
      
        
        
      
      
      
      <div class="form-group">
     
        
        
            
          <input placeholder="Phone Number "  id="email" type="text" class="focus for-icon form-control @error('email') is-invalid @enderror" name="Manger" value="{{ old('email') }}" required autocomplete="email">
      
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      
      </div>
      
               
      
      <div class="form-group">
      
     
      
          
        <input placeholder="Mobail Number "  id="email" type="text" class="focus for-icon form-control @error('email') is-invalid @enderror" name="Manger" value="{{ old('email') }}" required autocomplete="email">
      
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      
      
          
      
          <div class="form-group ">
             
      
              
                <select class="form-control form-control-lg">
                <option class="text-muted">Catgories</option>
                <option class="text-muted">Construcion</option>
                <option class="text-muted">Decoration</option>
                <option class="text-muted">Conuslate</option>
                <option class="text-muted">another option </option>
        
              </select>
             
        
          </div>
          
          <div class="form-group">
             
      
          
              <select class="form-control form-control-lg">
              <option class="text-muted">City</option>
              <option class="text-muted">Sharja</option>
              <option class="text-muted">Dubai</option>
              <option class="text-muted">ajman</option>
              <option class="text-muted">Fujera</option>
              <option class="text-muted">Abu Dabhi</option>
              <option class="text-muted">Ras alkhima </option>
              <option class="text-muted">Um aLqwain</option>
            </select>
           
        
        </div>
      
          <div class="form-group mb-0">
              
                  <button type="submit" class=" btn-orange form-control">
                      {{ __('Register') }}
                  </button>
                 
            
          </div>
              
             
              
            
          <div class="form-group row mt-5">
              <div class="col-md-6 offset-md-3 text-center">
              </div>
      
          </div>
      </form>
      
      
@endsection
      
      
      

