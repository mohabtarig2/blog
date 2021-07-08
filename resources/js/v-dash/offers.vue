<template>
        <div>
                <div class="row " v-if="IsUser==1">

                    <div class="col-md-4 mb-4">


                          <div class="card w-100" style="background:#6dc193">
                            <div class="card-body">
                               <p class="text-center  text-light mb-0"> acitve Ads<img :src="'assets/img/check-mark.svg'" width="18" class="mr-2"></p>
                               <p class="text-center text-light h2 mt-0"> {{count.active}}</p>


                            </div>
                        </div>
                        </div>

                    <div class="col-md-4 mb-4" >
                        <div class="card w-100" style="background:#ffb44d">
                            <div class="card-body">
                               <p class="text-center  text-light mb-0"> Under Review Ads<img :src="'assets/img/warning.svg'" width="18" class="mr-2"></p>
                               <p class="text-center text-light h2 mt-0"> {{count.pending}}</p>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">

                        <div class="card w-100" style="background:#aeb5c1">
                            <div class="card-body">
                               <p class="text-center  text-light mb-0"> Draft Ads<img :src="'assets/img/future.svg'" width="18" class="mr-2"></p>
                               <p class="text-center text-light h2 mt-0"> {{count.draft}}</p>


                            </div>
                        </div>
                            <router-link :to="{name:'MyOffer'}" class="btn btn-info btn-block   ">New Ads <i class="fa fa-plus fa-fw pr-3"></i> </router-link>

                     </div>
                </div>


                    <div class="card" v-if="IsUser==1">
                        <div class="card-body">
            <p class="h3 text-muted ">Latest Offer</p>

                  <div  v-for="(myoffer,index) in Myoffers" :key="index" style="padding:15px;background:#e8e8e8">


                       <router-link class="font-weight-bold ml-2 main-color " :to="'projects/1002'+myoffer.tender.id">{{myoffer.tender.title}}</router-link>
                         <span class="text-muted  float-right" dir="ltr">{{myoffer.added_at}}</span>
                      <p>{{myoffer.comment}}</p>

                       <span  class="badge badge-info pt-2 pb-2 pr-2 pl-2"  style="border-radius:20px;font-size:10px">budget :{{myoffer.budget}}</span>
                      <span  class="badge badge-info pt-2 pb-2 pr-2 pl-2"  style="border-radius:20px;font-size:10px">TotalAreaBuild :{{myoffer.TotalAreaBuild}}</span>
                      <span  class="badge badge-info pt-2 pb-2 pr-2 pl-2"  style="border-radius:20px;font-size:10px">supervisor :{{myoffer.Supervisor}}</span>
                      <span  class="badge badge-info pt-2 pb-2 pr-2 pl-2"  style="border-radius:20px;font-size:10px">design :{{myoffer.design}}</span>
                      <hr>


                  </div>


                        </div>

                    </div>

                        <div class="card" v-if="IsUser==6">
                        <div class="card-body">
            <p class="h3 text-muted ">Latest Offer</p>

                  <div  v-for="(myoffer,index) in Myoffers" :key="index" style="padding:15px;background:#e8e8e8">


                       <router-link class="font-weight-bold ml-2 main-color " :to="'tenders/construction/'+myoffer.tender.id">{{myoffer.tender.title}}</router-link>
                         <span class="text-muted  float-right" dir="ltr">{{myoffer.added_at}}</span>
                      <p>{{myoffer.textOffer}}</p>


                      <hr>


                  </div>


                        </div>

                    </div>
                </div>

</template>


<script>
export default {

  data(){
      return{
          count:'',
          Myoffers:'',

      }
  },
  computed:{
        IsUser(){
                return this.$store.getters.IsUser
    },
  },

     created() {


         if(this.IsUser==1){

     axios.get(`api/CountAll/conulte`).then(response=>{
        this.count = response.data;
        this.Myoffers = response.data.latest;


});
 }
         if(this.IsUser==6){

     axios.get(`api/CountAll/construction`).then(response=>{
        this.count = response.data;
        this.Myoffers = response.data;


});
 }

}
}
</script>
<style scoped>
.card {
    box-shadow: none
}
</style>
