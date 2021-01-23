        @extends('layouts.app')

        @section('content')

        <div class="flex-center position-ref full-height">

                <div class="container {{__('messages.text-d')}}" dir="{{__('messages.dir')}}">
        @if(Session::has('success'))
        <div class="alert alert-success"> تم تسجيل العرض بنجاح </div>
        @endif
                <form method="" action="" enctype="multipart/form-data">
                  @csrf
                  <!-- <input type="_token" value="csrf_token"> !-->

                  <div class="form-group">
                    <label for="exampleInputEmail1">choose photo</label>
                    <input type="file" class="form-control" name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('photo')
                        <div class="text text-danger">{{$message}}</div>
                    @enderror
                  </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__('messages.offer name ar')}}</label>
                      <input type="text" class="form-control" name="name_ar" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('name_ar')
                          <div class="text text-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__('messages.offer name en')}}</label>
                      <input type="text" class="form-control" name="name_en" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      @error('name_en')
                          <div class="text text-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">{{__('messages.price offer')}}</label>
                      <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="offer price">
                      @error('price')
                      <div class="text text-danger">{{$message}}</div>
                  @enderror

                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">{{__('messages.offer details ar')}}</label>
                      <input type="text" name="details_ar"class="form-control" id="exampleInputPassword1" placeholder="details">
                      @error('details_ar')
                      <div class="text text-danger">{{$message}}</div>
                  @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">{{__('messages.offer details en')}}</label>
                      <input type="text" name="details_en"class="form-control" id="exampleInputPassword1" placeholder="details">
                      @error('details_en')
                      <div class="text text-danger">{{$message}}</div>
                  @enderror
                    </div>


                    <button id="save_offer" class="btn btn-primary">{{__('messages.offer save')}}</button>
                  </form>

                  <div id="elzero-app">
                  <label>Write your username </label>



        @stop

        @section('scripts')
            <script>
              $(document).on('click',"#save_offer",function(e){
                e.preventDefault();
                $.ajax({

                type:'post',
                url:"{{route('ajax.offer.store')}}",
                data:{
                '_token':"{{csrf_token()}}",

                "name_ar" : $("input[name='name_ar']").val(),
            "name_en":$("input[name='name_en']").val(),
            "price": $("input[name='price']").val(),
            "details_ar" : $("input[name='details_ar']").val(),
            "details_en" : $("input[name='details_en']").val(),
           // "photo" : $("input[name='photo']").val(),

                },success:function(data){

                },erorr:function(reject){

                },
})
              })


              </script>


                 <script>



                 new Vue({
                    el: '#elzero-app',
                    data:{
                    username:'',
                    },
                methods:{

                },
                  computed:{
                  valideUsername:function(){
                   if(!this.username){
                      return '';
                    }else if(this.username.length < 8){
                      return 'Username is Too Short';
                    }else if(!isNaN(this.username)){ //!isnan not number
                      return 'cant be number only';
                    }else{
                        return ' hello ' +this.username.length + '/50';
                    }
                  },
                },
              })



                </script>



        @endsection
