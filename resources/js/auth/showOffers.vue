<template>
   <div class="container">


  <div class="container mt-5 " >
        <p class=" h2 font-weight-bold ">Offer Villa
            <a class="text-right float-right text-muted" style="cursor:pointer;font-size:14px">see All</a>
             </p>

        </div>




<!--  -->

 <carousel :autoplay="true" v-if="allOffershow.length" :nav="true"   >



             <div class="card" style="width: 22rem;border: 1px solid #d1cfcf;cursor:pointer" v-for="offer,index in allOffershow " :key="index"  >
                    <span v-for="image,i in offer.villa_image " :key="i" >
                        <span v-if="i==0">
                <img class="card-img-top img-fluid" :src="image.path" alt="Card image cap"
                style="border-radius:10px 10px 0 0"
                  data-toggle="modal" data-target="#exampleModal">
                    </span>
                    </span>



                <div class="card-body" style="padding: 5px">
                    <p class="card-text font-weight-bold card-p "> {{offer.title}}</p>
                      <small class="ml-4" ><img src="assets/img/maps-and-flags.svg" width="10" class="mr-1 image-icon1">
                     <small v-if="offer.Emirates==7">Abudabhi</small>
                    <small v-if="offer.Emirates==6">ajman</small>
                    <small v-if="offer.Emirates==5">sharja</small>
                    <small v-if="offer.Emirates==4">um alqwain</small>
                    <small v-if="offer.Emirates==3">Ras Alkhima</small>
                    <small v-if="offer.Emirates==2">Fujira</small>
                    <small v-if="offer.Emirates==1">Duabi</small>

                    </small>
                    <p class="text-left  main-color  font-weight-bold mt-0">
                       {{offer.price}} AED
                    </p>


</div>







                <div class="card-footer" style="background-color: #f7f7f7; border-top:none;font-size:14px;border-radius:0px 0px 19px 19px" >

                    <span  class="mr-4"  ><img src="assets/img/bed.svg" width="22" class="mr-1 image-icon"> {{offer.rooms}} rooms </span>
                    <span   class="mr-4"  ><img src="assets/img/HomeFloors.svg" width="22" class="mr-1 image-icon">{{offer.floors}}  floors </span>
                    <span   class="mr-2" v-if="offer.type_villa==1"><img src="assets/img/HomeFloors.svg" width="22" class="mr-1 image-icon"> classic </span>
                    <span   class="mr-2" v-if="offer.type_villa==2"><i  class="fa fa-home main-color" style="font-size:22px"></i> modern </span>





            </div>

             </div>









        <!-- </span> -->    </carousel>


<!-- Modal -->
<div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-body">
        <login></login>
      </div>
</div>










    </div>
</template>

<script>

import carousel from 'vue-owl-carousel';
import Login from './login.vue';
export default {
 components: { carousel,Login },
 data(){
     return{
         allOffershow : null,
     };
 },
 methods:{
     showOffer(){
         axios.get('api/ads/showOffer').then(res=>{
             this.allOffershow = res.data;
             console.log('successs show all offer')
         })
     }
 },created(){

     this.showOffer();
 }
}
</script>

<style scoped>
.card-p{
    margin-bottom: -5px;
}

.image-icon{

    width: 22px !important;
    display: inline-block !important;

}
.image-icon1{

    width: 14px !important;
    display: inline-block !important;

}
.flex-container {
  display: flex;
  flex-wrap: nowrap;

}

.flex-container > div {
  width: 100%;
  margin: 10px;
  text-align: center;
}
.diispaly{
    width: 200px;
}
.card-img-top{
    width: 50%;
}
</style>
