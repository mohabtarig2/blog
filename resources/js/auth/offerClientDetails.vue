<template>
        <div class="container">


 <div id="editPostModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
<img :src="src">
            <a :href="src" download class="text-center font-weight-bold text-dark"><i class="fa fa-arrow-down"></i> donwload</a>

        </div>
      </div>
    </div>

 <a @click="$router.go(-1)" style="cursor:pointer;" class="text-dark"><i class="fa fa-arrow-left  ml-3 mt-5 mb-2  fa-1x"></i></a>
<div class="card ">



<div class="card-body">





 <div v-for="offer,index in offers" :key="index">

     <div v-for="image , i in offer.villa_image " :key="i" >

              <a href="#editPostModal"  data-toggle="modal" @click="pick(image.path)" v-if="i==0">




<div class="main-images">


  <img class="card-img" :src="image.path" alt="Card image cap">
  <h1 class="badge badge-custom-orange">{{offer.price}} AED</h1>
</div>

              </a>

     </div>

     <div class="flex-container" dir="rtl" >

    <div v-for="image , i in offer.villa_image " :key="i" >

              <a href="#editPostModal"  data-toggle="modal" @click="pick(image.path)"  v-if="i>0">
        <img :src="image.path" class=" w-100 diispaly"  style="cursor:pointer" id="#editPostModal"  v-if="i!=0">
              </a>
</div>


 </div>
      <div class="card-body">
    <h1 class=" h1  main-color" >{{offer.title}}</h1>
    <p class="card-text text-dark" style="font-size: 1.5rem;">
{{offer.Description}}
    </p>
    <h1 class="badge badge-custom"> Floors  {{offer.floors}}</h1>
    <h1 class="badge badge-custom"> rooms  {{offer.rooms}}</h1>
    <h1 class="badge badge-custom">
        <span v-if="offer.Emirates==7">Abudabhi</span>
                    <span v-if="offer.Emirates==6">ajman</span>
                    <span v-if="offer.Emirates==5">sharja</span>
                    <span v-if="offer.Emirates==4">um alqwain</span>
                    <span v-if="offer.Emirates==3">Ras Alkhima</span>
                    <span v-if="offer.Emirates==2">Fujira</span>
                    <span v-if="offer.Emirates==1">dubai</span>
    </h1>
    <h1 class="badge badge-custom">
        <span v-if="offer.type_villa==1">classic</span>
        <span v-if="offer.type_villa==2">modern</span>

    </h1>

    <p class="card-text"><small class="text-muted">{{offer.added_at}}</small></p>



  </div>


    <button type="button" class="btn btn-success float-right  mr-4" data-toggle="modal" data-target="#exampleModal">
                Order Now
                </button>

           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">upload Your Files</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form @submit.prevent="payForm" enctype="multipart/form-data">



            <label>
                passport
                <input type="file" class="form-control" :v-model="form.passport">
            </label>
             <label>
                Emirates id

                <input type="file" class="form-control" :v-model="form.EmiratesId">
            </label>
             <label>
                Your land map
                <input type="file" class="form-control" :v-model="form.map">
            </label>

            <p class="font-weight-bold"> Build by</p>
            <p>
            <input type="checkbox" aria-label="Checkbox for following text input">
            <span class="ml-3">Bank</span>
            </p>
             <p>
            <input type="checkbox" aria-label="Checkbox for following text input">
            <span class="ml-3">Mohammed bin Rashid Foundation</span>
            </p>
             <p>
            <input type="checkbox" aria-label="Checkbox for following text input">
            <span class="ml-3">Sheikh Zayed Program</span>
            </p>
              <p>
            <input type="checkbox" aria-label="Checkbox for following text input">
            <span class="ml-3">Special grant</span>
            </p>
              <p>
            <input type="checkbox" aria-label="Checkbox for following text input">
            <span class="ml-3">other</span>
            </p>



            <div>

                <div class="payment" style="font-size:15px">
             <p class="font-weight-bold"> Payment methods</p>


               <div class="form-check d-inline mr-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault"  value="paypal" v-model="payment">
                <label class="form-check-label" for="flexRadioDefault">
                    <i class="fab fa-paypal" name="payment" style="color:#0070ba"> </i></label>
              </div>
               <div class="form-check  d-inline">
                <input class="form-check-input" type="radio" name="flexRadioDefault" value="visa"  v-model="payment">
                <label class="form-check-label" for="flexRadioDefault">
                    <i class="fab fa-cc-visa" name="payment" style="color:#0070ba"> </i></label>
              </div>


                </div>


            </div>

            <button type="submit" class="mx-auto btn-block btn btn-success">Pay Now</button>

        </form>
      </div>

    </div>
  </div>
</div>
</div>


</div>
</div>
        </div>
</template>

<script>
import {loadStripe} from '@stripe/stripe-js';

export default {

    data(){
        return{
      tender_id :this.$route.params.id,
      offers:'',
      src:null,
      payment:'',
      form:{
        EmiratesId:null,
        passport:null,
        map:null,
      }

        }
    },
    methods:{
  pick(src){

            this.src=src;

        },
      async  payForm(){
    const stripe = await loadStripe('pk_test_51JABSxB2bV4Yux9wohpRtGnNY1AcdLz47xsbppdJ7BcxDmfpwtYzdTHKG65rph7dYV222GL1tW6dFlF2D44EHhCe00XefIAddh');

             let data = new FormData();

      data.append("payment", this.payment);
      data.append("tender_id", this.tender_id);

                console.log(this.payment);
                console.log(this.tender_id);

                axios.post('paymentOffer',data).then(res=>{

                     $("#exampleModal").modal("hide");
                     $(".modal-backdrop").css("display", "none");

                    if(res.data=='paypal'){
                      this.$router.push({ name: "paypal"});
                    }
                     if(res.data=='visa'){
                      this.$router.push({ name: "visa"});
                    }



                })
        }
    },
     created() {
        axios.get('/api/ads/details/'+this.$route.params.id).then(res=>{
            this.offers = res.data;
        })
    },


}

</script>


<style scoped>


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
.main-images .card-img{
    position: relative;
        height: 500px;
}
.badge-custom-orange {
    background: #ffe4e1;
    color: #e74c3c;
}
.main-images  .badge-custom-orange{
position: absolute;
right: 47px;
    top: 39px;

        font-size: 1.5rem;
    padding: 20px 50px;

}
.btn-success{
padding: 6px 50px;

}

</style>


<style scoped>

</style>
