@extends('layouts.appnone')

@section('content')

<!--

review variable og the inpput when you programming 


-->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display:block;margin:auto" xmlns:xlink="http://www.w3.org/1999/xlink" width="102" height="102" viewBox="0 0 102 102">
                        <defs>
                          <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 200 200">
                            <image width="200" height="200" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAABmJLR0QA/wD/AP+gvaeTAAAOQ0lEQVRYCe2Za2wU1xXHz4wfPBxIABvaFBu7uDReU1KKaIlkqYowoJZCm4QK0Ta0KtAgRRFR+ZB8QVjQT61CzUMlCg8V0YRQERWpUaVAHfWDUWKoG0DZXUVyMV4HBIbwNk4xZnp3xZiZ8e7szPrOnXt3/quZnfs8j9+d47P3mggfEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEACB/AS0/EOCHVE9s2G2ZuhrtAe0iDSaxrRVsjvK11Ui7RKRccwoMfanuhLxKMMI2/fQAqS2tnbsA/2xVs0w1jEIOrtxjSQwxILlT5WTx2zs7OwcHNmNlqAJhBIg6eAwtIrjzLkmduPKQ8AgOjZhPC2Lx+P38gxFN2cCofzlZsGxg/mB4GAQvFzsr9jiO/3U6mUsxvAlwNjzFZhPWnrPoT/Qz7Bxw8FZX1tBL/+6huY0TqRJE8tYV3Sv67cG6fTZW9S69zz1XhiwghgyhmhOKhVPWBtRDpbA8EsarJpH0ksMfS2rDeudUT2O9rfOoe8/MyXywcG4ZBg82zSFDu58mmqmj0s3mXeJplOanVnHUwCB4RdVgK6MCsOgJZnCw69X19bSYxUlD2t4mAQmTiilDWtqyfFZ7KijGjABPWD52cRPtzbOn/uEtYqyhcAINhpVW7pRFEAgjAARvu8RwFGUCrATRfqhnjACJPVQd+Zx6pMbmSe+RhI46WRjkI3dyBlo4U1A5y0wnzxNo2PWMdv3nafbd4asTSgzArdu36ft7CSLFa3XMWsF5eAJCN8dT5xS1asZ2kvMtUxw3rh5nz488QV9pWoMVVWWU3lZppl1R/O6OzBE7R3X6bXffUa9F23HvPfJ0NbdvNl3NZpkwvE6lN+0NV+P7WZBsj4cl5XVuq2nO75RWesVNTyUP9cTxmkbWGQeV5SZcLPTrConj31duGIopFACJB6P35syeexSxn8Xu7EBYRByXIyNtjPNqrOzczDHGDQHSID9cQpQugfR1TMbZmuGvkYz6FUPw6M0ZJtRYuxPdSXiUXJaNl9DDxATyIy6RsMsp5+rjhxOPyJzH1qx0uYr229IszY2wyJWCeUnVsQYw12FCSBAFF48mB48AQRI8IyhQWECCBCFFw+mB08AARI8Y2hQmIA0JyXOU6wwmVbFYtS8ZbPNhLZNLdSXTNrazIrf8eY8tydOsdzoiOtDBnGw1nWddN373w2/4x3qUJWcgPc3IWBHnBkE/weJS7M2AS+91OKRQaReHhgXNoHSsA2A/uwEnBk1+6hItF4l0i4RGceMEmN/qisRF+k1MohI2tBVCIFKFhyz2cTfakPamRl1s3fMmzevjNWFXAgQIZihhBOBEhYsr1y59uX7jY2N5ZxkuopBgLjiQaeMBNjpxeI7/dQqwjbsQURQLkDHf443FTCr+KZcvzVIp8/eota956n3wsAjBzX6TU1N465UKp541Mi/hAzCnykkciQwaWIZPds0hQ7ufJpqpo+zSi7RdFprbQiijAAJgipkcicwcUIpbVhTS47PYkede1XnLhECQSAgAvPnPmGXrFG1vYF/rZS/SDES2za1UF8yWZCyqliMmrds9jVXtD5fxkV3MNuvB+u8shmk0OBI47yS8L+vE60vbSduO4GTn9ywNxiUsjfwrymbQUwU3V3tZtHTs65+dKdDovV5cioCg27dvk/b2UmWw9Vjjjr3ail3iRAIAhwJ3B0Yoo7OG9S6hx3zXhywSr5PhrbH2hBEGQESBFUOMr+zqJ2DlKIWsaOn59Nk0B7qQSuAfBDgTYDtzI9XTh77Om+52eQhQLJRQZusBIaItJ1TJo9d2tnZOSjCyFIRSqADBDgQ2GaUGPtTXfF4TzcHaR5FIEA8ghI9bNWRw6JVSqXv0IqVNnt6uuMbbQ2CKviJJQg01KhJAAGi5rrBakEEECCCQEONmgSU34PU1TcJJS9an1DnoGwEAWUzyNSGhhHOeG0oZG4hc0x7RjPXlIFnOATY/1zCUezUOqOu0bC2Re0Ux3lqY2URVrkqFqPmLZtt6ts2tVBfMmlr8zrONslnhZ1ihfKuKptBfPLFcJ8EdF0nXc//Tnod51O9NMOV34NIQ5KzIbJm0IVbW8jLx+u4XLJkyajIILlWCO0gwAggQBgEXCCQiwACJBcZtIMAI6DsHiTbaQrzx9OV7dQl30TR+vLZg34xBJTNIM6jRj+4riQSfoZnxorWl1GKr9AJKJtBTHLdXe1m0dOzrr7J07hcg0Try2UH2sUQUDaDiMEDLVEngACJ+hsA/10JIEBc8aAz6gRKow5AVf/9nKq5ndrJJke29UAGkW1FPNrj51TN7dRONjke3Rc2DBlEGOpgFOU7VfN6aiebnGBo+ZeKDOKfGWZEiAACJEKLDVf9E0CA+GeGGREioPwexOtvbF5rKlofL7shpzACymaQqQ0NhXnMZhUyt5A5TFXmGs3cjAB8hUZA2QyycGsLifyI1ifSN+jKTUDZDJLbJfSAAD8CymYQfgjUlsRrTySbHFlWBRlElpXwaYeffY3bWLc+p0luY936/Mhxjg27jgwS9goUqJ/Xnkg2OQXiCGwaMkhgaCG4GAgom0HaNrVQXzJZ0BpUxWLUvGWzr7mi9fkyDoMDI6BsBik0ONIkryQS6YevW7Q+X8ZhcGAElM0gJpHurnaz6Ok52tMa0fo8OYVBgRFQNoMERgSCQcBCoNRSRlEhAn72RG57LtnkyLYEyCCyrYhHe/zsidz2XLLJ8ei+sGHIIMJQB6Mo357I655LNjnB0PIvFRnEPzPMiBABBEiEFhuu+ieAAPHPDDMiRAABEqHFhqv+CSBA/DPDjAgRUP4Uy+spDa81Fa2Pl92QUxgBZTPI1IaGwjxmswqZW8gcpipzjWZuRgC+QiOgbAZZuLWFRH5E6/PqG6+MJpscr/4HPU7ZDBI0GNnl+8lKbmPd+pwM3Ma69fmR4xwbdl3ZDBI2uLD188posskJm6tTPzKIkwjqIGAhgACxwEARBJwEECBOIqiDgIWAsnuQtk0t1JdMWlzxXqyKxah5y2bvE9hI0fqYSlwSEFA2gxQaHGnmVxKJ9MPXLVqfL+MwODACymYQk0h3V7tZ9PQc7Xm/aH25nPKT0dwypmxycvkbVruyGSQsYLLo9ZPR3DKmbHJk4WvaUWoW8FSTQL6M5jVjyiZHltVABpFlJWCHlAQQIFIuC4yShQACRJaVgB1SEkCASLksMEoWAggQWVYCdkhJAAEi5bLAKFkIIEBkWQnYISUB5f8P4vWcnxd90fry2c3LHtnk5PNbVL+yGWRqQ0PBjAqZW8gc08DRzDVlOJ9+ZLqNdevzo5OXHKfOsOta2AaY+mfUNRpmOf1cdeRw+hGZ+9CKlTZfo+a/zXlWcfLo6Y6H8q4qm0EYQ1wgEDgBBEjgiKFAZQIIEJVXD7YHTkD5U6zREHowOEipjzro844Oun7+PN3r78+IK6+ooEl1dTT9e/OpZsEC0svKMu34ih6ByAZI6qOP6fTBt6m/r2/Eqt+70093LvdR78cddPbQX+nbL/6cap5ZMGIcGoqfQPQCxDDo9NvvUvLoUU+rmw6gE2/8ka7+6Ic0d/Vq0vRQDlNG2Nq2qYX6kskR7dkaqmIxat6yOVsXySYnq5EhNkZuD3Lqrb2eg8O6Lp+9/w86+eab1qZQy16DI23klUQi/ch6yyYnq5EhNkYqg/S0n6Cu4/+04S4vL6dfrX6BfvLjJfTkk9MyfRcuXKK/Hf2ADhx8jwbZPiXTyL7Offgv+urcuVL93OruameW5b7q6ptyd1p6ZJNjMS3UYmmo2gUqT2/Iz7zzrk3jtGmVtH/PHygW+4at/fHHJ2Tali9fROteeo0uX7463H/mL+9Q9Xfnk1ZSMtyGQvESiMxPrM87Ttk25GPGlNOf972RCYRcy/ut2d+kfW/9nsosp1h3Ll+m3pOnck1Be5ERiEyA9J46aVu6X/zsOXrqqZm2tmyVxsZZtPKnS21dF07+21ZHpXgJRCZArp07T9bPsmXN1qpr+fnnfmDrv3buv7Y6KsVLIDIB8r/r122rWF9fS14/s2bV2Ybe/cIuy9aJSlERKJXVm0MrVo4wbd60r9GBxc/b2n/5wXvU2XfR1ualUjF+nJdhmTEVFeMzT/Pr/pcDFLR9pi48wyWgTAYp1TQqYXe4uHJrl92+3Jajx42AtBnk0xdfcbN7uO/AkheGy26F2Qd3unX77pPFPq//58jnoGxy8tkrql+ZDCIKiCp6pjY0eDbVbaxbn1OB21i3Pj9ynGPDrkubQcIGI7v+hVtbiMdHNjk8fOIpAxmEJ03IKjoCCJCiW1I4xJMAAoQnTcgqOgIIkKJbUjjEkwAChCdNyCo6AgiQoltSOMSTAAKEJ03IKjoCCJCiW1I4xJMAAoQnTcgqOgJaUB5V1zUuZ8J3sbs6KB2QCwJOAgZRL2t7OdUd/zt7jvoKLIMwwbsRHKNeHwjwSSD9zmka7fY5Ledw9h7n7BttB7N1tCIwHwQKIGAQt3cvsAB5QLSeuXaJ3bhAQCSBS+xn1nqRCqELBEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEAABEDg/yHtHsQ9V3lIAAAAAElFTkSuQmCC"/>
                          </pattern>
                        </defs>
                        <rect id="icons8_company_200px" width="102" height="102" rx="51" fill="url(#pattern)"/>
                      </svg>
                      
                    <h1 class=" h2 text-center mt-3">
                  {{ __('SIGN UP NEW COMPANY') }}
                    </h1>
    

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="col-md-6 offset-md-3 ">
                              <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="19" viewBox="0 0 19 19">
                                <image id="icons8_business_30px" width="19" height="19" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABFklEQVRIDe1VPQ7CIBgF4gHcjTH1HC7G1QsUlo4uXsbBE7Q9grOJ93Ax9RId6vtqSGjSptBQdIDw8fu99+CDUsZiChQB7qqjlDoCc4ElMMrPpmnOZVneqGNrwtbR8LuirUXRZFvOOY1R29q49uzZiZ7yVXciY+6YVp34Uunh6UTGFF73OPse2mhCU1iPBamjcJAwk8j/hRqPwl4IcaDVTbEx/GKINM/zO0PCw4LSPY/hB4XTNN1h1cJd8osYw5vCFSArWJsR5kfbmFgM4F+aztzRCYNv2Fy5wl+MNObid+TFJZJZli0dYdbuxC2lVBpgnnFR1zXDAvSc15q4cVmJs6DCPGPqB7O/EK4CbDd+TgGCHCV+FYEPUJ8+XB4K4J8AAAAASUVORK5CYII="/>
                              </svg>
                              
                                <input placeholder="Company Name " id="name" type="text" class="focus for-icon form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            
                          <div class="col-md-6 offset-md-3 ">
                            
                            
                              <input placeholder="Date Create " id="name" type="date" class="focus for-icon form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                              <svg xmlns="http://www.w3.org/2000/svg"  class="the-icon" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="21" viewBox="0 0 21 21">
                                <image id="icons8_manager_26px" width="16" height="21" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABmJLR0QA/wD/AP+gvaeTAAACnUlEQVRIDY2Wy2sTURTGZyYvicFFqS4rtAR0EwR1JYgI0r8ghrxWguDKnXShS0HbTRciGBdNCXlUUBeC6cJF3OlC8FUoalYl+FgYJERSNRN/N22Gycyde1u+b8655/XN3MlcahqG/q9QKFwYjUY3TdNM2bbdxT5jfbtWq3X13XsV5p4JviJymaE1KkLQjR0WHbharVY3sEoohbLZ7KxlWW0mHIFB4CHti/V6/WVQgYhb4hLEUCh0lZxKhLTBvVjXhKOiUogtW1Q1u3JnXb7UVQrRMQ8PgqO6IktTMNLkJ+ndiRNklUJs3ZugRk/8i2ftWyqF+F5mfB2SADekrVMKMTMBteCGjumKdEKvdAP286/3baBRCg2Hwzt06va/x9YtUaeEUqjRaOww5JZqAtu2wpn3VlUjckohUdDtdp9ixZmG8aEXDocf+qKSgFao2WzuctfXJb0GT7tcLpe/yXLemFZINPCuvgvrJYec8iB115vuhdfPZDILbI04726QOw69+EzgPsf3Jqf3Nn4gfELpdDoUi8XybMsSXSfhgcD2thFcTiQSa6VS6a+3aWrrisXimWg0+hGRdQp9IsQfE08xtIqdArkF4g/6/f52Pp8/N5Vk4QjlcrnT3FHLMIwTUAabQU+SyeQWQ59TMIIyzBN84RWzCI7BkLs4h2EQRO29drs9S+0qRSYMwiESK9CBaB4vaE6NHcWFmnKlUvnBE60pyiapUxNHWEeIZscXCRnZWrFl4vvZlOXdMe889/D37kKZz3ezJeL8LzG2wlew5s45QpFIJEeiDv9AGex4PP5LJAaDQQ87hF78JvCIp7nE+XcF34HvhfIdJRA9z/sQP9c5muaonoFRYhbrAb4Nhf2J/QrfwQ+dTudTq9X6h+/Df1Dc1YM79GeRAAAAAElFTkSuQmCC"/>
                              </svg>
                              
                                  
                                <input placeholder="Manger Name "  id="email" type="text" class="focus for-icon form-control @error('email') is-invalid @enderror" name="Manger" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row">
                          <div class="col-md-6 offset-md-3">
                            <label>license Company </label> <sup class="badge badge-danger" style="font-size:8px"> PDF</sup>
                           <input type="file" id="fileupload" name="photos[]" data-url="/upload" multiple />
    <br />
    <div id="files_list"></div>
    <p id="loading"></p>
    <input type="hidden" name="file_ids" id="file_ids" value="" />     
                          </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                          <label>Achievements </label> <sup class="badge badge-danger" style="font-size:8px"> PDF</sup>
                         <input type="file" id="fileupload" name="photos[]" data-url="/upload" multiple />
  <br />
  <div id="files_list"></div>
  <p id="loading"></p>
  <input type="hidden" name="file_ids" id="file_ids" value="" />     
                        </div>
                    </div>

                      
                      

             

                  <div class="form-group row">
                    <div class="col-md-6 offset-md-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="24" viewBox="0 0 24 24">
                        <image id="icons8_phone_100px" width="24" height="24" xlink:href="data:image/png;base64,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"/>
                      </svg>
                      
                          
                        <input placeholder="Phone Number "  id="email" type="text" class="focus for-icon form-control @error('email') is-invalid @enderror" name="Manger" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                             
                    
                <div class="form-group row">
                  <div class="col-md-6 offset-md-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="the-icon" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" viewBox="0 0 31 31">
                      <image id="icons8_google_mobile_64px" width="31"  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAACz0lEQVRYCe1ZMW/TQBT2nUMII0ywVKgkESNb2RA7PyBKooyhpCBAQswZEbBQCVRljJLIPwCxwYo6AWMUIapWrIxRC3LNF1SndVUckvfidxLPupOfc3fv+95377l27Xl6qAKqgCqgCvy/ChiO0BuNxkoYhi/g6yb6Cvoy264xZtta+6Tb7e5SgcgCHAX/GUQuomfZfkD0G0EQ7FFALWXxZC1IPMc56+AB6V3yff/ZxKB0sgAAv4Uu1W5TgXNUB1h/GX3a+v2+mV4swajVatEJt1dO2AuZHBmwELAri1QAV3ZCiodmgJTyruBqBriyE1I8NAOklHcFVzPAlZ2Q4qEZIKW8K7iaAa7shBQPzQAp5V3B1QxwZSekeGgGSCnvCq5mgCs7IcVDM0BKeVdwOb4MJWI59eUmMebihZaA4K68tdauRlF0zRjzTooHewn8ayBhGLbwIXVvMr9arbYgwo4ncIiVQD6fP4zjPcQR21mfJTNgq1Kp3IUQBvFvoRSyjv0PnpgAQL/j+/53lAJMuSZWAnIhJ5GXkQERIN5gdzcLhcK3TqfzC9de/HyAG5+ZXP+tn57XbDbPjcfjVcx/iDJZxzl1PcbnauwCgOTrwWDwYC4WKZOPBBxiSqter3vwfw82W7Nsno4dbR6b7NYrbo/sApTL5a/cJGN/xWJxFNtcZ3I9xTXLRWheP7PuKbP8sWfALEDXxtlvgqVSyW+329OnvDjgOFNm7VjaPPi1o9EojH1ynNkzYDgcljmIneUDwV8/63fKb+wC4KVmg0IobS18308bX2SMvQRAcgNpbPCI+zIIgh2P4cA7w9VcLvcUzwDrDO4SLsh/BfAqu4+gzye8Znexj3vKBQocuQQQ/DaFAHHtR+J6jywAUv0RSPxEz7ShHA4g/mMqKFkA1PknkFlD/wAySxcCOAfAeY9/p631er0vsLWpAqqAKqAKqAILKvAb5nO0pXTZ9PEAAAAASUVORK5CYII="/>
                    </svg>
                    
                    
                        
                      <input placeholder="Mobail Number "  id="email" type="text" class="focus for-icon form-control @error('email') is-invalid @enderror" name="Manger" value="{{ old('email') }}" required autocomplete="email">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

                        

                        <div class="form-group row">
                           

                            <div class="col-md-6 offset-md-3">
                              <select class="form-control form-control-lg">
                              <option class="text-muted">Catgories</option>
                              <option class="text-muted">Construcion</option>
                              <option class="text-muted">Decoration</option>
                              <option class="text-muted">Conuslate</option>
                              <option class="text-muted">another option </option>
                      
                            </select>
                           
                        </div>
                        </div>
                        
                        <div class="form-group row">
                           

                          <div class="col-md-6 offset-md-3">
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
                      </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class=" btn-orange form-control">
                                    {{ __('Register') }}
                                </button>
                               
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
@endsection
