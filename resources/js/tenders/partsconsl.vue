<template>
         <div class="card" >
  <ul class="list-group list-group-flush">
       <li class="list-group-item mb-0 h5   text-center font-weight-bold" style="color:#e74c3c"> Budget  :  {{min}}  AED  - {{max}} AED </li>
    <li class="list-group-item">


                 <div class="row   font-weight-bold">
                <div class="col-6">
                    <img src="assets/img/HomeFloors.svg" width="22" class="mr-1"> Floors
                </div>
                <div class="col-6 text-center main-color">
                    {{floors}}
                </div>
            </div>

            <div class="row font-weight-bold mt-4 ">
                <div class="col-6">
                   <img src="assets/img/bed.svg" width="22" class="mr-1"> mastar room
                </div>
                <div class="col-6 text-center main-color">
                    {{room_mastar}}
                </div>
            </div>

            <div class="row mt-4  font-weight-bold">
                <div class="col-6">
                   <img src="/assets/img/bed.svg" width="22" class="mr-1">  Bed Rooms
                </div>
                <div class="col-6 text-center main-color">
                    {{bedroom}}
                </div>
            </div>


                 <div class="row mt-4  font-weight-bold">
                <div class="col-6">
                     <img src="assets/img/sofa.svg" width="22" class="mr-1"> majlis
                </div>
                <div class="col-6 text-center main-color">
                    {{majlis}}
                </div>
            </div>

            <div class="row font-weight-bold mt-4 ">
                <div class="col-6">
                    <img src="assets/img/cooking.svg" width="22" class="mr-1"> kitchens
                </div>
                <div class="col-6 text-center main-color">
                    {{kitchens}}
                </div>
            </div>


            <div class="row font-weight-bold mt-4 ">
                <div class="col-6">
                   <img src="assets/img/dinning-table.svg" width="22" class="mr-1"> dining rooms
                </div>
                <div class="col-6 text-center main-color">
                    {{dining_room}}
                </div>
            </div>


            <div class="row font-weight-bold mt-4 ">
                <div class="col-6">
                    <img src="assets/img/bath.svg" width="22" class="mr-1">bathroom
                </div>
                <div class="col-6 text-center main-color">
                    {{bathroom}}
                </div>
            </div>


            <div class="row mt-4  font-weight-bold">
                <div class="col-6">
                   <img src="assets/img/villa.svg" width="22" class="mr-1"> Service room placement
                </div>
                <div class="col-6 text-center main-color">
                    {{position}}
                </div>
            </div>


            <div class="row mt-4  font-weight-bold">
                <div class="col-6">
                    <img src="assets/img/maps-and-flags.svg" width="22" class="mr-1"> Emirats
                </div>
                <div class="col-6 text-center main-color">
                      <span v-if="emirats==7">Abudabhi</span>
                    <span v-if="emirats==6">ajman</span>
                    <span v-if="emirats==5">sharja</span>
                    <span v-if="emirats==4">um alqwain</span>
                    <span v-if="emirats==3">Ras Alkhima</span>
                    <span v-if="emirats==2">Fujira</span>
                    <span v-if="emirats==1">Duabi</span>
                </div>
            </div>







        </li>
  </ul>
</div>
</template>
<script>
export default {
props:{bathroom:Number,dining_room:Number,bedroom:Number,
emirats:Number,floors:Number,kitchens:Number,
living_room:Number,majlis:Number,min:Number,max:Number,
note:String,position:String,room_mastar:Number,
stage:Number,status:Number,title:String,villa_type:String} ,
     mounted() {
            console.log(this.title);
        },
}
</script>

<style scoped>
.main-color{
    color:#e74c3c
}
.row:nth-child(odd) {
    background:#f6f6f6;
    padding:5 10px;
    border-radius: 5px;
}
.row:nth-child(even) {
padding:5 10px;
}
</style>
