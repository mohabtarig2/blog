<div class="profle-businress">
@extends('layouts.app')

@section('content')







    <div class="profile-img mt-3" >
      <div class="container">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto d-block mt-3 " xmlns:xlink="http://www.w3.org/1999/xlink" width="166.521" height="166.521" viewBox="0 0 166.521 166.521">
        <defs>
          <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 400 400">
            <image width="400" height="400" xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gKgSUNDX1BST0ZJTEUAAQEAAAKQbGNtcwQwAABtbnRyUkdCIFhZWiAH4wALABkAAgAbABJhY3NwQVBQTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9tYAAQAAAADTLWxjbXMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAtkZXNjAAABCAAAADhjcHJ0AAABQAAAAE53dHB0AAABkAAAABRjaGFkAAABpAAAACxyWFlaAAAB0AAAABRiWFlaAAAB5AAAABRnWFlaAAAB+AAAABRyVFJDAAACDAAAACBnVFJDAAACLAAAACBiVFJDAAACTAAAACBjaHJtAAACbAAAACRtbHVjAAAAAAAAAAEAAAAMZW5VUwAAABwAAAAcAHMAUgBHAEIAIABiAHUAaQBsAHQALQBpAG4AAG1sdWMAAAAAAAAAAQAAAAxlblVTAAAAMgAAABwATgBvACAAYwBvAHAAeQByAGkAZwBoAHQALAAgAHUAcwBlACAAZgByAGUAZQBsAHkAAAAAWFlaIAAAAAAAAPbWAAEAAAAA0y1zZjMyAAAAAAABDEoAAAXj///zKgAAB5sAAP2H///7ov///aMAAAPYAADAlFhZWiAAAAAAAABvlAAAOO4AAAOQWFlaIAAAAAAAACSdAAAPgwAAtr5YWVogAAAAAAAAYqUAALeQAAAY3nBhcmEAAAAAAAMAAAACZmYAAPKnAAANWQAAE9AAAApbcGFyYQAAAAAAAwAAAAJmZgAA8qcAAA1ZAAAT0AAACltwYXJhAAAAAAADAAAAAmZmAADypwAADVkAABPQAAAKW2Nocm0AAAAAAAMAAAAAo9cAAFR7AABMzQAAmZoAACZmAAAPXP/bAEMABQMEBAQDBQQEBAUFBQYHDAgHBwcHDwsLCQwRDxISEQ8RERMWHBcTFBoVEREYIRgaHR0fHx8TFyIkIh4kHB4fHv/bAEMBBQUFBwYHDggIDh4UERQeHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHv/CABEIAZABkAMBIgACEQEDEQH/xAAcAAEAAwEAAwEAAAAAAAAAAAAABgcIBQIDBAH/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIQAxAAAAGmAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPKS3gVXYtiDG3hZtZAAAAAAAAAAAAAAAAAAAAACQx79Nj+yAz4A5WVNgU+UmAAAAAAAAAAAAAAAAAAAeR4/RPLtKviulY4Z21Nj66y3APR7xlDhaKzsfgAAAAAAAAAAAAAAAAAF7UTMTTbx8gCiq21dlQ1R06FvoA/M1aWjJll7PWAAAAAAAAAAAAAAADrnIltqWSVDSmy82lmWNk3VJ9IFU2t6jHmoc/dE0u/P0Aoeq9dZUPgAAAAAAAAAAAAAABJNO5B0KWIiwlMc9IzDcfIjRqByfUdtFh8GbNRU+WNYearqJWiwlNSzH1GYXT5gAAAAAAAAAAAAASG4TPzRnLKHWdBTlr47BB5t5+B+VvJ4QQp3rjM/Xj2/vIrR141EctfHYM3r35JT35JrhM8NGVMQwAAAAAAAAAAD6fmlZoqubHyUWjd2P79Pjl0ds0reEV/8AIazjcQl59lbWTFiwa/snIpaF2ZBvk9Mtj1mlbwaBfCa0i0XlB9nD4N0mfLHm1elBfns9YAAAAAAAAAA+/wCAa/o7l3eURoL84ZGp9VcLJ5Bb17BzOV9EdJNXknr8v+k+LeBQ+g/3hkbnlWwkn8CvbsHM4v2xk9MR87pKV0Zw4EVPxPLxAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/EACoQAAIDAAEBBwQDAQEAAAAAAAQFAgMGAQAHEBQWIDZQExU0QBIhkBEx/9oACAEBAAEFAv8ATpHljDumeZD+zS4545+NTpTmkkmcBW9+7V+FN+Mz8g4tYRjCHe1CrYAF0WDE/GYpp49d6O0BX/KHxNFVt9iTHyl1rlP2xihYTWMqrIW1d99UL6XYE1rH4dJljDelasJbX1oV0WayyMq59n7T+dXo2yvxq74bChLJhejfK/okhEWCFrC6zwfRr1f25n8LlGf21px/fHewFqNDYC2BGYJp4cv0aRbwzWTjzCfwSZAez5b5QehL1hmnjAPRvlf1h4y5hLNMuGaz0b1X9Av4BavLYWpMmKL1xxxxx1sVf29mmOsXMB7qyKO+yMbIaFbJYzyLT7az9DISs4I4awMv97OUBkthh6Rqe/Qros1k4yrn2fNP69GxV/cVvWIaeNXejfq/q0fvR5545S6YG1d5hTdeYU3XmFN15hTdaEGpsxsWNlPSkyJ681qvCt8wpuvMKbrzCm6aqOT2ItTLOncaFNzx5hTdeYU3XmFN1a9R2Vsq6KTfg+zb87e+3siWLVn99bVc37+zX8PtK/C+BTKSmtwWOW1QvySiyIGPEr52acFWOuBJYEr8aHXCzJppRz6H7Qfvfb2czqw5NsF4y1inVFNLwscuqjfkk9kc2okoj2lfhLQSWBC/Gh1wsyaaURMaJWTq0K5coRJyW14uPVVwIyKiyOhQEKef1x6p33qQalwL7W80EA7I2FoZFRQ3aT+Ll1kFqzSaeK+0fYs4WqWFDIPe+3sZ7c3tcrtAnAqWg6DWeGvC2R0LQiaTBu0n8PLrILVml00V1o+yZQtUn0Mg9/7fxdMKs9tbnVU0egOGYsniIwD9fJccc6JxKcFXd2cynyp3fHHM+f8AwuU5lddms5/X3vt7Ge3HXEed0xlOAHPd2cznys3XHHPcdKczOuzWU/57/wBv4t9QNTVZXbG8Ye/h7lBL6pR5jL9YAiQhg11RYr7Kl0XgZtqVaoAqWgdpHPMRkh0GK3UZi+ZI2fb325xTBSFvfb2M9ube+Q2lEIqLE0GWKqIBzjYqxOBUtA7R+eeBEh0GK3U5i60kfPt7rc6qgpB3/t9TllZq7RrL0hefcOZMenkoTcfr5vQWqpBO1ZkSGi+iIumU3S3jAI0ZA4IUkr9CqMhawBqjVplNhGxari0mWbrBkW3LGMaZp/cqkE7VmRIZr6IjaZTdPdsQjREDghSQv0KoyNrAGqNWmU2EbNovLS5bQcq+h26oyHiVQvGg1Y8aOef+8/6V/wD/xAAUEQEAAAAAAAAAAAAAAAAAAACQ/9oACAEDAQE/ARx//8QAFBEBAAAAAAAAAAAAAAAAAAAAkP/aAAgBAgEBPwEcf//EADsQAAIBAwAGBgYJBQEBAAAAAAECAwAEERITITFBUQUUIjJhcRAgIzRQc0BCUnKBgpGhsTNTssHRkGL/2gAIAQEABj8C/wDToS3ObaDxHaP4U9tZwhZl7Ssd7GiDsI+Hewj0Y+MjbqEhGvn/ALjDd5D09diX2U/e8G+Gw9fjDwk4OdwoKgCqNwHqS2sm5xsPI86kt5Rh4zg/DdTI2Z4Nh8RwPqr0nCu1ezL/AKPwoRwxs7ncFGaE3SbaI/tKdv4msxLi3l2p4cxUdyvd3OOa0skbBlYZB9R4ZF0kcaJFSWrbhtQ8x8IEtzm2g8e8fwrQtYgDxY94+iSDZrO9GeTUUcEMpwRR6MlbtJ2ovLiPV6xEvt4NvmvH4OLtI9O6U4cvt0fL1R0jEvYl2SeDVHcxHDxtkVFdRbnGfL1SYx7CbtJ4cx8GUufYSdmT/tbPUktphlZBipbaXvocUej5T7ObueDeq8GzWjtRnxoqwwQcEfAwyJq4f7j7vw50zWmm9zH2yx+sOI9HVJWzNBs814eqOkYl7cWyTxWgynBG0Ukx/qr2ZR4+qOkIl9nNsfwb4Dq7WEueJ4ChLe4uJfs/UH/awBgegvGvsJu0nhzFRXUf1T2hzHGkmibSRxkH1GRxlWGCKeDbq+9Gea0NY3sJuzJ4cj6strL3XGPKpLaYYeM4P0+KC+0hG+wYONvChFBEsaDgo9SS32azvRnk1FHGGU4Ipui5W/8AqL/Y9UvGMzw9pPHmPR1aVvbwbPNeHqjpKJe1H2ZfLn9PyDtqM3tykU47LA8fGvf4q9/ir3+Kvf4qNx0KyXLMMzKuzHjSX0luYdWww2RvqG7UY1i7vGtVdXKRORnBr3+Kvf4q9/iqW46ExcwNtOicaB5VBe3EBjUnRIz3hxr3+P8Aevf4q9/ir3+Kmje9iKsMEVJHbTCaHPYccvgl38sfzT/MWrZJLmFGGdhcDiajaKRJBqhtU54+pd/MH8VafMP8fAtC3XsjvOdy0OstJO/HboisIkkR5q9Si7YzDPsyDo7PGrdrRGUuxBy2aEFrHpNx5DzoG8leZ+S7FrAhkTxEhqaRJtZFImBkbRT/ADFqC5njkMj5zh/GkgtVYIY87TmtXbrsHec7lodYaSdvPRFdiOSI81f/ALVxFrRKjsCp41afMP8AFCC2j02/YUDeyvM/EKcLWBDIniJDUmvkaaEjsbcEGjcWyOJNMDa2aKQ4WNe+53Cvba2duZbFYRJYjzV61mdbbnc+N3n9ISGMZZ20RUdtCNijaeZ501v0eiPobGkbd+FDrcUcsfHRGDSXED6UbjINWf32pBj20g0pT48qNraoss47xPdWgZkgkTiNHFLcwHZuIO9TT/fWrX83+RqCJBlnjCj9ajtohuHaP2jTW3R6I7JsaRt2fCh1uKKWPjojBpLiBtKNxsq0+Yf4pFx7aQaUh8eVG1tUWW4HeJ3LWZkhlTiMYpbmA7DvB3g0fmrUDJvkyzVH1HWi30e00Q258aQX1zI1uxxJrNuKmtnuwQ6Ed0/SLPP2/wDVXTxd8RMR+npmVu4svZ/SujA27rG39qOKlaTvlzn0XafU0VP40/31q1/N/ka6O0vsj/dXDR94RMR+npnU91Zez+ldGg7us+iZ5O+XJP6+i8T6mFP40fmrXUL19BM5jc7vKtKN1ccwc1iaCKT7y5ppLBdRMNoX6rUVYYI2H6PDcrvjcNSTRkNHIuRTS2Ca6AnIUd5aCm2aFeLSbMUlrFuXeeZqyI3iQ1FcqdpGHHJuNPedHKHDnLxbiD4VoCykTxfYK1WdOVjmRqf761a/m/yNWtwnejRW/eo7iI5SRcinm6Pj1sLHOgN60F6s0K8Wk2AUlrFtxtLczVmRvEpqG5Q7SMOOTcae96PUPp7Xi458K1YspF8X2CtTnSkY5kbmaPzVqC611x7RMnDDfx4UDaSXAt2Gx9LjUMEc8lwGbBR9uz0XbR90zNj9fpGqkBltj9XivlQMV3GD9ljg1pS3sC/nqTNwIgpwDJs0qtha3KTFXOdGtOPtxN34+dDFysT/AGJNhrSkvIFH3xTRdZCqo/qNsB8qeG3u45JNNTgGreGe8ijkXOVPnSS2syypqsZWtU4Mtsx2py8RQMV5GD9ljomtKW9gUffqQG5EaqcAvs0qtltblJSrknRrSTtwt34zxoYuVif7Emw1pSXkCj74p4+shVUd9tgPlRhtruOR9YpwK6vcBntmOdm9TXYu4Gz9Vjj9jRYTWkOeRAp4OjWMkjDGt4L5Vn/0s//EACoQAQABAwMCBgMBAQEBAAAAAAERACExQVGBYfAgcZGxwdEQUKFAkPHh/9oACAEBAAE/If8ApyCsFXKK82vpo5pN5B0l0XrQtqIR0/XHcjZwfvirQL2hb3/MbEawLa/rn1/Wld18uOF3Jo4sQCA8ABhgHleqp+en1P1sLGJPnvDjw6MFCZOw9P1SnNyhqYrKf/MPIoET5P8Aq+zUpiXr7NEsMbUfAFJFWo1Oav1Ph/TgrAVfcL22+mjzakJW+81/EaQLrQx645pZjFGEzXV6hz8TPhmpgpgvpPn9PMwNi7pDQTXPhzzVg8h59yo1SfVSxadu1OHwJJCUjySW7fQ9k/TOklm224NIBQnTwXRiujonUoI4luuzzWcNlrx8+/hHxkrQ6c4pJk8NH9HvI4ooERd1uRYMG55fiWguE513GPTw4V6yeQ8e1NUfIaNJ4cUOvOfDbmaycvPv+hu37DHnuCp/DvZd8vl6UbEBABj8WoHYiy+D2alSwbvhRDhd8PgGu4rUc02yS71MemOKYcEW19D2aESS/gDmb9u0eGuSSN15/wB66Jak0l2cVi3fEPBGgAkaGPXFOdcVolS4FLr2b+vhyouIufk9ysVlgJe31nx4ekVBnTw/3g2AZEaKU8K3Hyrtn6rtn6rtn6r/AMZ+qlfhO7jOM1BJOlolbDSczIrTBPWicEOXFds/Vds/Vf8AjP1QKtRlJzdHnzVtXcXYWaOMMmE+lds/Vds/Vds/VK3+4bjnShETrGjn9Lp23eht1N4dJahDmhjLb9O0E1Md/teldxGUC/8Aae6PsY4ZqO98ujUDepwlzWB1pwDXWB3WhWrX6xfNTZvVP7NW79OJhm+ldt3oh5SoFkYoSSHrpaivz4t1+qatf/BL/wBpQQyyWP6q2qNogEXPwEp5SVmB3XQrbgcL5amzeqf2agi5ydMWaOfJ72Oa7GEbq9KJG6wPoUl0bQxwzRW74OEthp/ojMMPVYoIhgd9ZU6+WTkbD3qequi/LSh0VSMkdwUzzE1svYVmvn+G2WtMKmXhp8cnlgNdv3r+OhDOW9VlAU2u+qtMuJljqBr51Owth+WlGfmH8PX8PRKwI95ewr4CgXtlopp6z8NLWxeeQ123rRaFxbsx8VqpaYu7LhEVHpQBh3NbV1tcj0cb/wCgPjEnmUVL5ZneVP4WBf6QmoNJw8lJjCWLUgyqz3m/4yXeekk9q7fvX8dAjwl5mNSFEY7yikrL+G3dY63U3ngPlatKX1Zd3y/GV/Srq7b1p0Ulhk5W1AXnAh/KWkHZ91CfFBeKNKbQ+B0f84E2wbw4rzazgdKSzNDwxqeVTYHZx4ZamnQl8tlaUKET0KI0k2FhV3wKbg7jpWQahKLlpKcSsS7HQrt+9fx0MGReG0SAz6qVI8Fz6RqVeJln9xqdY3ou+WmShA9KOhkjBhUloxmNx3eVE7vuUfLUbG3XgOhXbetXHYWYaHKaHclNW1CkdtHIypHcy3La01G9MQ1/0GyPlnc3+tMRJpvhpMI8i+hegcDeqIbUu60rBBTrcM26jZpkcF1i9bPFdf8ArVfuLBLnGqkB4F9A0S8J25LaJxgmsMtqVySSXfZanIU0Tw1w9AvoXoAGvV0NqLF0rBFO90y3UbNMzzKxetniuv5WoogTHL21Vd88d4KfYLB5knTpUXEyGuaN7QMt6UqQliOtLLSImV/6Wf/aAAwDAQACAAMAAAAQ88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888gI8888888888888888888888408I888888888888888888840oI8sY8888888888888888884c8w88s88888888888888888ggc8sg08Y8888888888888888wwo8wU0ww088888888888888AMIgcIYsIMQ088888888888sk44Mg8ocIU8ks888888888888gMssAgkoUA0UE88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888//EABQRAQAAAAAAAAAAAAAAAAAAAJD/2gAIAQMBAT8QHH//xAAUEQEAAAAAAAAAAAAAAAAAAACQ/9oACAECAQE/EBx//8QAKRABAAIBBAECBwEBAQEA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"/>
          </pattern>
        </defs>
        <rect id="bY9wyrTr_400x400" width="161" height="161" rx="80.5" transform="matrix(0.999, -0.035, 0.035, 0.999, 0, 5.619)" fill="url(#pattern)"/>
      </svg>
    </div>



<div class="text-center">
    <h2 class=" mt-2"> Mohab tarig</h2>

    <a class="text-center text-light btn btn-blue rounded" href="{{url('review')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 64 64"><g class="nc-icon-wrapper" fill="#ffffff"><path fill="#ffffff" d="M61.707,2.293c-0.273-0.275-0.683-0.365-1.048-0.233l-58,21c-0.378,0.137-0.638,0.488-0.658,0.89 c-0.02,0.402,0.203,0.777,0.566,0.952l20.886,10.025l18.866-13.945c0.462-0.341,1.041,0.238,0.699,0.699L29.074,40.547 l10.025,20.886C39.266,61.78,39.617,62,40,62c0.017,0,0.033,0,0.05-0.001c0.402-0.021,0.753-0.28,0.891-0.658l21-58 C62.072,2.976,61.981,2.567,61.707,2.293z"/></g></svg>
        Message
     </a>
     <a class="text-center text-light btn btn-dark rounded" href="{{url('review')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 64 64"><g class="nc-icon-wrapper" fill="#ffffff"><path fill="#ffffff" d="M50.003,63C22.982,63.001,0.999,41.018,1,13.997c0-0.263,0.107-0.518,0.293-0.704L10.586,4 c0.781-0.781,2.047-0.781,2.828,0L26,16.586c0.781,0.781,0.781,2.047,0,2.828L17.414,28L36,46.586L44.586,38 c0.781-0.781,2.047-0.781,2.828,0L60,50.586c0.781,0.781,0.781,2.047,0,2.828l-9.293,9.293C50.521,62.893,50.266,63,50.003,63z"/></g></svg>
        contact us
     </a>
</div>
</div>
<div class="card mt-3">

    <div class="card-header">
        <div class="container">
        <ul class="nav nav-tabs card-header-tabs">

          <li class="nav-item">
            <a class="nav-link active text-dark" href="#">
                <img src="{{asset('assets/icons/profile-icon.png')}}" width="20">
               <span class="visible"> Profile-company</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark " href="{{url('business-board')}}">
                <img src="{{asset('assets/icons/store.png')}}" width="20">
               <span class="visible"> Our sevices</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="{{url('review')}}">
                <img src="{{asset('assets/icons/review.png')}}" width="20">
                <span class="visible">review</span></a>

          </li>




        </ul>
    </div>
      </div>

</div>


<div class="container">



            <div class="form-group row mt-5">

                <div class="col-md-7 ">
                    <div class="card text-center">

                      <div class="card-body ">

          <h2 class="text-left text-primary">description </h2>
          <p class="text-muted text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore natus vero magni,
             temporibus neque nisi ipsa corrupti quos veritatis, error deserunt, maxime ut molestiae nam! Harum ipsam atque tempora alias.
          </p>







              </div>
          </div>
      </div>
                <div class="col-md-5">

                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">

                        Ratings

                        <div  class="badge badge-dark text ml-3 pt-2 pb-2 pl-2 pr-2">7.55%</div>
                    </li>
                    <li class="list-group-item d-flex  text-dark justify-content-between align-items-center">
                        Project completion rate
                        <div  class="badge badge-dark text ml-3 pt-2 pb-2 pl-2 pr-2">7.55%</div>

                    </li>
                    <li class="list-group-item d-flex text-dark justify-content-between align-items-center">
                      <a href="{{url('account')}}" class="text-dark">
                        Settings
                 </a>


                    </li>

                </li>
                <li class="list-group-item d-flex text-dark justify-content-between align-items-center">
                  <a href="{{url('account')}}" class="text-dark">
                    Completed projects

             </a>


                </li>
                <li class="list-group-item d-flex text-dark justify-content-between align-items-center">
                    <a href="{{url('account')}}" class="text-dark">
                        Average response speed
                        <span  class=" ml-5 ">
                            3 hours and 39 minutes
                        </span>
               </a>


                  </li>




                  </ul>

                    </li>

                  </ul>
                </div>


  </div>

                    </div>










@endsection
