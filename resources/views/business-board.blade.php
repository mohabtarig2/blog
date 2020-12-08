@extends('layouts.app')

@section('content')






  
    <div class="profile-img" >
      <div class="container">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto d-block mt-3 " xmlns:xlink="http://www.w3.org/1999/xlink" width="166.521" height="166.521" viewBox="0 0 166.521 166.521">
        <defs>
          <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 400 400">
            <image width="400" height="400" xlink:href="data:image/jpeg;base64,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V/Srq7b1p0Ulhk5W1AXnAh/KWkHZ91CfFBeKNKbQ+B0f84E2wbw4rzazgdKSzNDwxqeVTYHZx4ZamnQl8tlaUKET0KI0k2FhV3wKbg7jpWQahKLlpKcSsS7HQrt+9fx0MGReG0SAz6qVI8Fz6RqVeJln9xqdY3ou+WmShA9KOhkjBhUloxmNx3eVE7vuUfLUbG3XgOhXbetXHYWYaHKaHclNW1CkdtHIypHcy3La01G9MQ1/0GyPlnc3+tMRJpvhpMI8i+hegcDeqIbUu60rBBTrcM26jZpkcF1i9bPFdf8ArVfuLBLnGqkB4F9A0S8J25LaJxgmsMtqVySSXfZanIU0Tw1w9AvoXoAGvV0NqLF0rBFO90y3UbNMzzKxetniuv5WoogTHL21Vd88d4KfYLB5knTpUXEyGuaN7QMt6UqQliOtLLSImV/6Wf/aAAwDAQACAAMAAAAQ88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888gI8888888888888888888888408I888888888888888888840oI8sY8888888888888888884c8w88s88888888888888888ggc8sg08Y8888888888888888wwo8wU0ww088888888888888AMIgcIYsIMQ088888888888sk44Mg8ocIU8ks888888888888gMssAgkoUA0UE88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888//EABQRAQAAAAAAAAAAAAAAAAAAAJD/2gAIAQMBAT8QHH//xAAUEQEAAAAAAAAAAAAAAAAAAACQ/9oACAECAQE/EBx//8QAKRABAAIBBAECBwEBAQEA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"/>
          </pattern>
        </defs>
        <rect id="bY9wyrTr_400x400" width="161" height="161" rx="80.5" transform="matrix(0.999, -0.035, 0.035, 0.999, 0, 5.619)" fill="url(#pattern)"/>
      </svg>
    </div>

    <h2 class="text-center mt-2"> Mohab tarig</h2>

    
</div>


<div class="container">
    
            <h1 class="text-center">Dashboard</h1>
            
            <div class="form-group row">
                <div class="col-md-4">
                  
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Messages
                      <span class="badge badge-danger badge-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                     Notfications
                     
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <a href="{{url('account')}}" class="text-dark">
                        Settings
                 </a>
                     
                      
                    </li>
                  </ul>

                    </li>
                   
                  </ul>
                </div>
                <div class="col-md-8">
                  <div class="card text-center">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                       
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('profile-company')}}">Profile-company</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Add New Offer</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{url('review')}}">review</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                    
        <h1 class="text-center">New Villa </h1>
        
        <div class="form-group row">
            <div class="col-md-6 offset-md-3">
              
                <svg xmlns="http://www.w3.org/2000/svg"  style="position: absolute;top: 8px;
                left: 35px;" class=" mb-1" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">
                    <image id="icons8_tag_window_60px" width="22" height="22" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAABmJLR0QA/wD/AP+gvaeTAAACiUlEQVRYCe2Yv0sjQRTHdzcSA6uIYC3CVWKhcNhe5xVWV5grkhAFkYD6B5zNgRZicWBhZbzjQi4xKwH/AOFqW1P4A8HWwsZChSMhWb8PdmWzO2v2BGFn8sJ8mdm3O+F9vrMvOxtN4w87wA6wA+wAO8AOsAPsADvADrzFAV00KZ/Pj7fb7V2c+wSNQXFrd0joBqqYpnlQLBZbGEdqAWAH9gyzRyEZWgOLM29Z1m2UZA3/RZhMKysLLKU/nUgkTtLp9BAd9FIAGBPmINnaVDKZ3I+StAh4OMrEGF6TyWazK73yEgH3mhPb87Zt72UymY+vJagUsK7rg4ZhHKGeR8KglQImSKzyB9TzTxqLpBywA7mQy+XWnXFXpyqw1ul0fojqWVngsHpWFpjuY1E9Kw1M0FBXPfcDcFc99wUw1TP0B8/npOzA9Fq4gVqdIOH23YAohi7QJvF8LgwEwnIFvler1R1PyjvYT9Mr77Yn5h1mpV5hvMqWvTQ0xqtiIEZxR1OGM5CyS6VSHX/izWbT9sc8x7bUwK1Wa0nzfbDCi76Q9/BC9hreQs1qWNVfRIUfpWX0m1BYq+r+M/gC2x9T5PgSxsxIfUv/x0I84Fb/Uq/Xm30BjE1HoVwuX5NBstcwMbwqbEh+41ldcy9SfYUb+CFbdWGpVxmY6vZrqVT6R6CulAX21q0LS72SNeyvWwJ1peIKB+rWhaVeNWBh3RKoK6WAw+rWhaVeBPxIJyTUYaVSeXnehuUvAv4bdnGM4+fYJxei5BcAxh/Y3zDxHpKlNfBHwGfskyPdmQHgWq12hY32DGiPoQcoju0JSZ1Ca6ZpzlqWdYsxN3aAHWAH2AF2gB1gB9gBdoAdeEcHngFvc61DjW8ECgAAAABJRU5ErkJggg=="/>
                  </svg>
                  
                  
                <input placeholder="Title "  id="email" type="text" class="focus for-icon form-control @error('email') is-invalid @enderror" name="Manger" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-3">
              
                <svg xmlns="http://www.w3.org/2000/svg"  style="position: absolute;top: 8px;
                left: 35px;" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                    <image id="icons8_edit_property_100px" width="20" height="20" xlink:href="data:image/png;base64,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"/>
                  </svg>
                  
                  
                  
                <textarea placeholder="DETIALS "  id="post" type="text" class="focus for-icon form-control @error('email') is-invalid @enderror" name="Manger" value="{{ old('email') }}" required autocomplete="email"></textarea>


                <div class="form-row align-items-center">
                    <div class="col-auto my-1 mt-3">
                      
                      <select class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect">
                        <option selected>number Of FLoor</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                </div>
                
                <div class="form-row align-items-center">
                    <div class="col-auto my-1 mt-3">
                      <label>
                          <span class="text-right mr-2">BROWSE FILE</span>
                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="41" viewBox="0 0 41 41">
                            <image  id="icons8_picture_128px" width="41" height="41" xlink:href="data:image/png;base64,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"/>
                          </svg>
                          
                      <input type="file" hidden>
                      </label>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class=" btn-orange form-control">
                           
                            {{ __('POST') }}
                            
                        </button>

                    </div>

                 
                </div>

                @error('email')
                
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>      
    </div>

  </div>

                    </div>
                  </div>
                </div>
                
            </div>

                    
              
            </div>      
        </div>

      </div>


    






@endsection
