<template>
    <div>

<div class="container">


<div class="card mt-3 container">

<div class="ml-3">
         <h1 class="font-weight-bold  h4 mt-5 ml-2 main-color" >
             {{title}}</h1>


            <span class=" d-block">
            <small class="fa fa-history text-muted " style="font-size:12px"></small><small>
                 <!-- {{created_at | luxon({ input: "server" }) }} -->
                 {{added_at}}
                  </small>
            <small class="fa  fa-ticket text-muted" ></small>


            <small >  Offers ( {{count}} )</small>
            </span>



            <div class="mt-3 " style="padding:0 20px">
              <span v-if="note.length >  100">
             {{note.substr(0,100 )}}...
              </span>

              <div class="row mt-3">
                  <div class="col-6 text-left">
                        <div  class="mt-2"><img src="assets/img/homefloors.svg" width="22" class="mr-1"> floors: <span class="main-color font-weight-bold">{{floors}}</span> </div>
   <div class="mt-2" ><img src="assets/img/bed.svg"  width="22" class="mr-1">bedroom <span class="main-color ">{{bedroom}}</span></div>
    <div class="mt-2"><img src="assets/img/maps-and-flags.svg" width="22" class="mr-1">emirates  <span class="main-color font-weight-bold"> <span v-if="emirats==7">Abudabhi</span>
                    <span v-if="emirats==6">ajman</span>
                    <span v-if="emirats==5">sharja</span>
                    <span v-if="emirats==4">um alqwain</span>
                    <span v-if="emirats==3">Ras Alkhima</span>
                    <span v-if="emirats==2">Fujira</span>
                    <span v-if="emirats==1">Duabi</span>
                    </span>
    </div>


                  </div>

<div class="col-6 font-weight-bold">
     <div class="text-center mb-0"> Tender id
            <br>
                  <span class="main-color"> 1002{{emirats}}</span></div>

        <router-link class="  btn btn-bus" :to="{name:'project',params:{id} }">More Details</router-link>


</div>
              </div>
                 </div>


        </div>



</div>


</div>
    </div>




</template>



<script>
export default {
     props:{title:String,note:String,id:Number,status:Number,created_at:Date,count:Number,bedroom:String,floors:String,emirats:String,added_at:String},

};
</script>
