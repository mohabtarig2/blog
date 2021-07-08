<template>
   <div class="container">


  <div class="container mt-5 " >
        <p class=" h2 font-weight-bold ">Offer Villa
            <a class="text-right float-right text-muted" style="cursor:pointer;font-size:14px">see All</a>
             </p>

        </div>

<div class="form-group">
<select  class="form-control" id="exampleFormControlSelect1" v-model="searchoffer">

    <option value="7"> Abudabhi </option>
    <option value="6"> ajman </option>
    <option value="5"> sharja </option>
    <option value="4"> um alqwain </option>
    <option value="3"> ras alkhima </option>
    <option value="2"> Fujira </option>
    <option value="1"> dubai </option>



    </select>
</div>


<div class="row" v-if="allOffershow.length">
             <div class="col-md-4 col-sm-12" v-for="offer,index in allOffershow " :key="index" >
     <router-link :to ="{path:'/offer/details/'+offer.id}">
   <div class="card"   style="width: 22rem;border: 1px solid #d1cfcf;">
                    <span v-for="image,i in offer.villa_image " :key="i" >
                        <span v-if="i==0">
                <img class="card-img-top img-fluid" :src="image.path" alt="Card image cap" style="border-radius:10px 10px 0 0">
                    </span>
                    </span>

                <div class="card-body" style="padding: 5px">
                    <p class="card-text font-weight-bold card-p text-dark"> {{offer.title}}</p>
                      <small class="ml-4" ><img src="assets/img/maps-and-flags.svg" width="10" class="mr-1 image-icon1">
                      <span class="text-dark">
                     <small v-if="offer.Emirates==7">Abudabhi</small>
                    <small v-if="offer.Emirates==6">ajman</small>
                    <small v-if="offer.Emirates==5">sharja</small>
                    <small v-if="offer.Emirates==4">um alqwain</small>
                    <small v-if="offer.Emirates==3">Ras Alkhima</small>
                    <small v-if="offer.Emirates==2">Fujira</small>
                    <small v-if="offer.Emirates==1">dubai</small>
                      </span>

                    </small>
                    <p class="text-left  main-color  font-weight-bold mt-0">

                       {{offer.price}} AED
                    </p>


</div>


                <div class="card-footer" style="background-color: #f7f7f7; border-top:none;font-size:14px;border-radius:0px 0px 19px 19px" >

                    <span  class="mr-4 text-dark"  ><img src="assets/img/bed.svg" width="22" class="mr-1 image-icon "> 8 rooms </span>
                    <span   class="mr-4 text-dark"  ><img src="assets/img/HomeFloors.svg" width="22" class="mr-1 image-icon text-dark">       2 floors </span>
                    <span   class="mr-2 text-dark" v-if="offer.type_villa==1"><img src="assets/img/HomeFloors.svg" width="22" class="mr-1 image-icon"> classic </span>
                    <span   class="mr-2 text-dark" v-if="offer.type_villa==2"><i  class="fa fa-home main-color" style="font-size:22px"></i> modern </span>

            </div>



             </div>
             </router-link>
             </div>

</div>



















    </div>
</template>

<script>

import carousel from 'vue-owl-carousel';
export default {
 components: { carousel },
 data(){
     return{
         allOffershow : null,
         searchoffer:'',
         issearch:false,
     };
 },
   watch:{
             searchoffer(query){
                 if(query.length > 0 && query.length !=='' &&  query.length !==null){
                      this.issearch = true ;
                     console.log(query);
                     axios.get('/api/searchoffer/'+query).then(res=>{

                        this.allOffershow = res.data.data;


                       // setInterval(function(){ this.issearch = true ;}, 200);


                     }

                     );


                 }

                 else{
                        let opldpost = JSON.parse(localStorage.getItem('offer'));
                        this.allOffershow = opldpost;
                 }
                this.issearch=true;

             }
        },
 methods:{
     showOffer(){
         axios.get('api/ads/showOffer').then(res=>{
             this.allOffershow = res.data;
             localStorage.setItem('offer',JSON.stringify(this.allOffershow))
             console.log('successs show all offer')
         })
     },

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
    height: 200px;
}

textarea:focus,
textarea.form-control:focus,
input.form-control:focus,
input[type=text]:focus,
input[type=password]:focus,
input[type=email]:focus,
input[type=number]:focus,
[type=text].form-control:focus,
[type=password].form-control:focus,
[type=email].form-control:focus,
[type=tel].form-control:focus,
[contenteditable].form-control:focus {
  box-shadow: inset 0 -1px 0 #EB3349;

}
 .form-group .form-control{
     border-top:0;
     padding: 0;
     border-left:0;
     border-right:0;
     border-bottom:1px solid #c7c6c6;
         border-bottom-right-radius: 0;
     border-bottom-left-radius: 0;
     font-size: 14px;
 }
</style>
