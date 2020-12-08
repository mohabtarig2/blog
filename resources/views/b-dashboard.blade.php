
@extends('layouts.app')

@section('content')
<div class="card pt-5 pb-5">
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
                        <option selected>Name Of FLoor</option>
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
                            <image  id="icons8_picture_128px" width="41" height="41" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABmJLR0QA/wD/AP+gvaeTAAARk0lEQVRYCe2ZDXBU1RXH334EmUq1DDrVZlBBHOtYbFGnWsvU6lSrVAGBQBKSJcW2gKKMSKXtdGp0xn4J+AGopRAgCUkkiAx+BKFaa/0YRaTYyjidDNYRCY6AVetoNtmkv/PY97jv5e1m9+1u2OzezDnvnnvuPefd+z/nfuyLYeg/jYBGQCOgEdAIaAQ0AhoBjYBGQCOgEdAIaAQ0AhoBjYBGQCOgEdAIaAQ0AhoBjYBGQCOgEdAIaAQKDYGANaGysrIh/M3u7e29MRAInI1+OKypcBD4iKm0E9/Vw4YNW7tq1aou6oaZAJFIpLSnp+cJGseJUnPBI7ArFotNbGlpORCoqakZ2t3d/SrBv6Dgp60naCPALr/78OHD3wlGo9F5Ovg2LkUjEPNxw4cPnxNmxpWwSk8Fg8FbGhoa3lGVWh7cCFRWVo4OBoPLCfwEaybsApVBHl+3FFJyNszTwRckCoubmpr29fT03OSa1XlBFMNgm7gYvGdXtFBQCJAE77omdJIkgEunq8WEgE6AYoq2x1x1AniAUkwqnQDFFG2PueoE8AClmFTyHeC4zpffp1P4KbqMQfRS3tbY2LgFWdMAIXDcdwCC/iBzPRM+i48UIiNqGigEcpoA1dXVF7PCr+hnMqVK+0hF7iPi70r44j4NWuEbgZwlAIFfypennazw52bOnPlH3yOMG1ZVVd2Lv2fhnSLH1brIEIGcJQCBn6+M7XYS4iKlnpYothwPCy0jZNW3pdalDwRylgCM5R+wRfwfIng/lQCcLgUwFlt1rG+m60T390ZABdW7h08tO8CvVVNW7XhW8gxVF5c74qUU78tDZbERW1Xn9q22aTk9BHKWAPyc28FQtsI2Ebg77UpcILiynR+k2kG7yIjHCF2t4fzbGvft1OqaLwRy+h2A4N1OgK9hZENgoa/KQ2X+Q7WZujCFJ52maKPiU6lrMUMEcrYDyLhYqe2Usqq7KGMkwy8o0yICvhiDGNyFfHPcJ1VN2UAgwE+0XtXRhg0bUr6ocT4vJSi3wC/j41cER0pEJ82ePfvL3d3dQ+rr6w87W1KrRSKREeFwOFpXV/eplwVz+C5juIcEu4z2+5nDHZSaPBAAK0e8fScAji7F/yuwReK4mcpiArCfMudUXl4+MhQK/YEXlcNq4n6bMexEp8mFAHGTONnasC2lKbDiSlhxqpUEoBLFJHaGhZztq5A9qba2Ntje3n4tjT/CxyWUp8Ml8Af43YtuG/ImgvgJpSfxMWgO/ZbR+CXYQfgQXw6drngj4PsOwHb/Ii4fgd10IgFYQRIMdzdIvaKiYnx7e/vrBO9JeB66C2FJgFMoz0dXRrkGH+1k61xkSSyKY4SPU+i3Ao07+DHsljA2z6OI/ppcCPhOAPz0skLnEYjLAX03dQd1dXX1OBRUSIob+ajzHDbjqCYl+pxKh4exWVdWVjYE2SbuE+LbsZXR+DzjuIjg/xxZU4oIZJIA5ivY6l8YM2bMxVR+Bh+ADxGIm1pbWz9GtonVXIX+zyjS2p6xiQwZMmQNdvZOgO8j6BeiOwS/gzyNZLyC4O+hrikNBHxfAtN4h0Hwx9L/NXgobJGs4nUEb01nZ+fuDz/8sOuMM84YHYvFptJhMXwyrNKtBHm5qtBy+ggQC8fOGU7fhS+LJVipwf+EehkB3U6p0r+p/I7bfWM4HH6SY+AC6hbdFYlEmvz+lLSc6NKJQMZHgNNd3xoXNgni1UqLZGC5R/DtLi0tLe9RuQbugC0aztn/E6uiy+wgkPME4NI32TXUrQS/zaXrU+U872AHqDWUP44Lty+lVYt+EAina8Tv74kE5n7sRsEq7aOygOA+SanShWqFIDap9WQyl7+N/JpYSR9znLx3HHIAll2EwjB8jMe004+jCKS9AxCEhzEdBbtpNAqv7wLyG5+mo8Ql7+2jUv/PdevW/ZdeB2GTSJ4TOFJGmJX4w8d44pa6EASC8kiTk9kEPHw5dBwJ9ur16OulcvTnHuDwh0G648FEk4VAMvCsPo6SVTgHxQHYTe+jkDYKBzn6Yn+eozVJpaam5is02zsIq72TbwCH0NmEP3mn4x3xxkTjiTfrQhAwz1YRUmUuZ1vpK0yREr1Br0mwSQSxEmEj3C9Fo9HpBNgeI/JujBw7go/x4EKThUDaO4BlmGrZ09OzxdV3Ih8jrnXp+lS53J1OwGsN5Y/kcftSWrXoB4GcJ0Bzc/ObDGw7bJGc4S0kwdWWwl3yIWgkum2wvf0jf8THodWUmrKIgL29ZtGnl6tFKF+Dh8JCJ/FoIwkSfgpmtZ9MH5Xu1F8BVTiyI2ctAQjmNIZ0JzwKvo3vAfKPH0TDQP4n7T+lUg8HYKEgj9kEeja/943S0lKDn4ioPKkRHyvUFo6IOdguRbePo+Iu7gKPIWtKEwEJQpomzu78u/ZbBON5wzBa4W/AJxKY5fwL17GCCWAjekmCLvqkTNjUcxm8EYNe2CTeORz9g1ROhMcibyLB/so4vkldUxoIZJIA8p/EJay+1wnA5eo70QVLSkr6+OZfx2u4FF5J31fg/mg/fudgU8NPv6jaGX2IehBW6fvod5EE96pKLSdHwA1i8t5KK0CPp3o7LMGgsOkzAjGfwH1kaxSBS+GL7AaXkSTfo98DNL0Bd8CH4LfQt6CfTgKdg49V6HphB+HjEP0WoXTvJiFsFzG2y2jTlAICvu8AAN3j8i+Baka3mMDtp0xKnNl/p4MwRfqE/QN8Fn6GL4v3YX0NbJPH2Ow2LTgR8L0DsIpfxpWcw59R7mRFjkc3E+4TfO4Dp8q5TT9fJLbiw23MTvA277uWd19H21vw/5DvQ/cqsqYUEJBzXFau3RXwrFu6rctEIHi3EpSl+AiwMheyO0jSUE2N2M4XYCf2vfi5jZW/IjVL3csLAS7Ljnj73gG8nLt1BG8MQZNLWZi2EPLdlGkRwRebEEZhLpBLxCeypiwhIIHJkqu+bgierNwhSstBRTZFdogpJMYyKtYKd3zuxcdB2k+i3aA8gfoS5MmwpiwgkLMEYKVeRbAmqmMkgHepdZHRyZFQKjL9Rd4issVc8mrRN1l1ykkkzQ84Sv6CPGiJC+wpoVDoPJkAc9x7vL5yBmUAuWC269+6/L7E+d3i0knVDL4IsPwPgOIYxW1eOqYxZCdw+1ab81rmDL6UBN5O0A+S2C8I8wX0A9FVV1dfMtCDz1kCsLIvUCbTw0QXUHdcQKinQpj2iq36s3NsKob51oddcSqTeR5srmJscq+hMEnuR1eRCH8jEaaYmgF65CwBGP9y2CQmfQ9b9i6z4uMhtuJDMbV9K7q8FglsGXNoIfgnJBqotMHyn9JpifpkW5+zBODn5CImLFva+QTwN5kOPO7jfPGJ7zsy9TeQ9hJ8AtvEO913LlkUb6BXqYRKE0fFgCSBe0C8O3tE0ORfwP057KDD6bDQ+/JIxAR+b6K2fNWz7U8naTcwPhXrbhIiwv2mGb1BsCsp18NWnxLkZvTyn9RNyDmjnO0AqY4YcObT9yDcASgiIw48ya2clXqRcCQSGZGNESQJ/kwr+PIeEruJuc9E7oYtkmRoZjxlliIXZc6/BOZi0Nn0ySobC/i/JxF/iF/rYhZDbuOm/suGhoZ/IadN+J2BUSMchi2SlS/B32gp1DJRwjC2SnbTVrWvX5lxOS7ix30H8DuRbNixusrx8xoAT6C0go9oiHwdP2V3ApgEUnQpc9xvIwZh2KKkwZdO7AobKavgbtiiMAnahM+c7ARFmwAEdhbAbgDloXAikja5kM1K1MGtJ1A1cb928EmwTnhSPMBuE0ed4+BR6Qt3Kg2SBPLrIOVxKLZJxaJMAIIvq3o1yKjz76XeBm+DRaYwSfqsjtuYikQPtvAKgu/2281REmELfzqRnVsvffEzC303bJE5Dt4x3VJkoxSn2fAzaHzEA9nIgMOwSbLa2O4nsfomwPLv5cmiMxuPPqRvYzLw8VuJTQPdQ7BFEsCqVFa+ZWCVjEN2gmrq4oPCpDDv2MC7Zpi1LDyKKgEATlaV+/f456zQ65ubm5+w8CRgW0VH/XPYIgFffpqJD0tnlmz78xAaYTv4BMrc9iWQ6H0RO0ELhrLiuygtCiOkdSzRPyEVTQLEg18HEuqcP2erlbN5B3oHkQQ7pA2lmgRiW8dOEEFvkgSffiupBGCTJPgk0FQC+LSpyOBBAj2Ov3JcdMEWmeOIz8nS+SrFkS/DwWQUD1gdY1bnmzD49DMpURIQEDMJkgUf26dMJ1l4kEibeadnEjCGGiODPxWQDNzkrykAyTf4NYxQnWuUM38GQdqBPilJH+lLpyhsUYiArGHlL0dhr3zkGFyDTdaCjz+TJAl4nxw/8g5TxyOIbjVzlOSgmj6poKRvnecWsvIBqJlhyrlJYdIXPB1nPvWkFL8fXE8n9TgQn/aZT1sXSTGdQMm5TTX7RGI1yzvw3AVbJP9JlDvBXEuRTlmwCcD5OA2w1gCGGqQoCTGDc3U7+rRIbLAtxygKuylG2yyCv9ndkO16/B01hmHEYItkF1pBwldYilTLgkwAtsRqAGiBZZVSmPQFz+tZRVspfRFHQSmGJbBK5srHr+w0qj5nMsnYRHJP5wVdsEVyLMlPxLmWIpWy4BJAgs9qXMvk1ZUvwZff+dvR+yJ2lLn4XYmxrDYKkyT45fFVaSoG6iHvJAnKeZ+aBDK2h2Ss6FOigkoAJl5FkPoEH6Ams2oyCj5oPgQLwBQmHbfgm2/nkSwJWAjybYJeyalgEoAJT2Gq8lNPXfldJEQFQD1Dmy+Kn6srMFaDH6Neg9+cn/m8JynJGEjwH9NJxkRhEtMOLGfsU81akkdBJIAEnxm3ME/1fJatUX7qbUHviwCwAnAbMA7BFgnQEXYU+aJo6Y5rSRJsYJyzGISMjcIkuRPcZ0pJHoM+Adj2b/AKPoCUE6THk8w9aRNJVY6PBjqFYIti6GbhN2+Cbw1MkgC5xuj76wBVYhrUCSDBZ2qPwo6VT5AyupjhdwZJ1YDfEGyRGfw40JYur0oSs5Fxz2BQ+4WR51ImpXDS1jxuZIXOZHjrYTVIXzDpGwBiG3pfRPBlK5W7hLo4zLsEfh/z5XQAjfg5KmMUTumt6iRTMsiHThJ8Au0ZfADISfDxmzKo+YBRqmMYdAngFXy2/E4mPIUg+Q4+F74IPupgFRNz5eO3IIPPXI1BdQSwPVcyaMfKl+CzG8i230abL5Lg46fogi9gqdku9bzlePDrGaB95hO0zkyDz45SjR8Jvu2XdxT8ymeOJgXNZ54/chl8Emgt03cEn3plIW/7zM+mvE8AtucKRlsP20FixXZSn8Kt3Pe2Lys/UfDxuwn/RUF5fQeQ4BPsBiIRgk2ibgaf3+NPmwofD3aUKszcK78bXWUxBZ/5GkF55CPnOPjrDMOwkwpZgl9RbMFn3vmZAGzPXp9hzYtZFlb+OkMHHwiOUr9HACtxKtvuUrqfCSej/xiGsZBV5Pj+TjAncdYuo20UHID9knzu3cz27dc+kZ1g0JoDv4neNxD6Xl7SDi8gHknvSf0eAQR/JY7OhPujswzDkL4Ux4jgP0JtNJxJ8DHXlAYCgvU59K+HRabwpqC32rfW62Xdvr1pw0wRCNTW1nrFxPbbbwKwgm+m90G4P+qgw02wm2oMw9gHaxpYBN7lddUkQA9lQpLzL2GjNMQ/iDwmsh/mDHoWu7NhTXmIQL87QB6OWQ8piwhIAnym+otEIqVqXcuFg0B5eflI12w+lQTYqypjsdif6Pg1VaflwY+ALOxwOCy/yNTJvBXg969c8laoWi0XDQLzgkeOHFnNTf/NopmynqiJADHfHY1G64JtbW2dwWBwgijMFv0oBgR2dXd3X9fa2hoNyWz37Nnz6bnnnrs2FAod4MvfaehGkBD9/kSkn6ZBggBx7SSmuynvHjZs2Pz169d/PEiGroepEdAIaAQ0AhoBjYBGQCOgEdAIaAQ0AhoBjYBGQCOgEdAIaAQ0AhoBjYBGQCOgEdAIaAQ0AhoBjUCaCPwfk2qR7uuwIU8AAAAASUVORK5CYII="/>
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









@endsection
