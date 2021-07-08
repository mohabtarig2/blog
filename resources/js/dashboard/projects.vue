<template>
  <div>
 <div class="container h2 mt-5">Open Projects</div>
    <div v-if="users.role_id==1" class="container">


        <div class="row">

                <div class="col-md-8">


          <listproject v-for="(project,index) in projects" :key="index" v-bind="project">

          </listproject>




<pagination :data="projects" @pagination-change-page="detailsTender"></pagination>
      </div>


                <div class="col-md-4">
                       <div class="card">
                           <h1 class="d-flex justify-content-center">Ads Area</h1>
                       </div>
                </div>
        </div>

    </div>




    <div v-if="users.role_id==6">
<div class="container">
      <div class="row mt-5">


<div class="col-md-8 col-sm-12">
<div class="card mt-3 container" v-for="(tender,index) in tenders.data" :key="index">

<div class="ml-3">
         <h1 class="font-weight-bold  h4 mt-5 ml-2 main-color" >
            {{tender.title}}</h1>


            <span class=" d-block">
            <small class="fa fa-history text-muted " style="font-size:12px"></small><small>
                 <!-- {{created_at | luxon({ input: "server" }) }} -->
                 {{tender.added_at}}
                  </small>
            <small class="fa  fa-ticket text-muted" ></small>


            <small >  Offers ( {{tender.count}})</small>
            </span>



            <div class="mt-3 " style="padding:0 20px">
              <span >
             {{tender.notes.substr(0,100 )}}...
              </span>


              <div class="row mt-3">
                  <div class="col-6 text-left main-color">

    <sup class="fa fa-map " v-if="tender.emirates==2">Fujira</sup>
                <sup class="fa fa-map " v-if="tender.emirates==5">sharja</sup>
                <sup class="fa fa-map " v-if="tender.emirates==6">ajman</sup>
                <sup class="fa fa-map " v-if="tender.emirates==4">>um alqwain</sup>
                <sup class="fa fa-map " v-if="tender.emirates==3">Ras Alkhima</sup>
                <sup class="fa fa-map " v-if="tender.emirates==1">Dubai</sup>
                <sup class="fa fa-map " v-if="tender.emirates==7">Abudabhi</sup>




                  </div>

<div class="col-6 font-weight-bold">
     <div class="text-center mb-0"> Tender id
            <br>
                  <span class="main-color"> {{tender.id}}</span></div>

        <button class="  btn btn-bus mx-auto" @click="Toredict(tender.id)">More Details</button>


</div>
              </div>
                 </div>


        </div>



</div>
</div>
<div class="col-md-4 col-sm-12">
    <h1 class="text-center">
Ads Area
    </h1>

</div>


</div>


      </div>
    </div>






  </div>
</template>






<script>
import listproject from "./listproject.vue";
export default {
  components: { listproject },

  data() {
    return {
      projects: null,
      users: null,
      tenders: [],
      count: null,
    };
  },
  methods:{

      detailsTender(page=1){
  this.loading = true;
    axios.get("/user").then((response) => {
      this.users = response.data;

      if (this.users.role_id == 1) {
        axios.get('/AllTenderConsulte?page ='+page).then((response) => {
          this.projects = response.data.data;
        });
      }

      if (this.users.role_id == 6) {
        const request = axios.get("/AllTenderConsr?page="+page).then((response) => {
          this.tenders = response.data.data;
          this.loading = false;
        });
      }
    });
      },
      Toredict(id){
          console.log(id);
           this.$router.push({ path: `/tenders/construction/${id}`});
      }


  },
  created() {

      this.detailsTender();

  },
};
</script>
