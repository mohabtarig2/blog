<template>
    <div>

        <span class="nav-item" v-if="isLoggedIn">


            <div v-if="users.role_id ==1 ">

<div class="container mt-5">
        <div class="row " dir="rtl">

                                <div class="col-md-8">
                    <offers> </offers>


                    <!-- <NewAds></NewAds> -->
                                </div>
                                          <div class="col-md-4">

                <div class="card">
                    <div class="card-body">
                               <img src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" width="84" class="d-block mx-auto mr-2">
                               <div class="text-center text-dark font-weight-bold  mt-2"> {{users.name}}</div>


                                <small class=" mt-2 text-center text-muted font-weight-bold d-block">Consutlances</small>
                </div>
                             <table class="table table-striped" dir="ltr">
            <thead>
                <tr>
                <th scope="col"><i class="fa fa-user text-dark"></i> Manger Name</th>
                <th scope="col">{{manager_en}}</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="col"><i class="fa fa-envelope text-dark"></i> Email</th>
                <th scope="col">{{email}}</th>

                </tr>
                <tr>
            <th scope="col"><i class="fa fa-mobile text-dark"></i> Mobile</th>
                <td>{{mobile}}</td>


                </tr>
                <tr>
                <th scope="col"><i class="fa fa-phone text-dark"></i> phone</th>
                <td>{{phone}}</td>


                </tr>
                <tr>
                <th scope="col"><i class="fa fa-calendar text-dark"></i> date Create</th>
                <td>{{date_create}}</td>


                </tr>
                <tr>
                <th scope="col"><i class="fa fa-map text-dark"></i> Emratis</th>
                <td>
                    <span v-if="emirates==7">Abudabhi</span>
                    <span v-if="emirates==6">ajman</span>
                    <span v-if="emirates==5">sharja</span>
                    <span v-if="emirates==4">um alqwain</span>
                    <span v-if="emirates==3">Ras Alkhima</span>
                    <span v-if="emirates==2">Fujira</span>
                    <span v-if="emirates==1">Duabi</span>

                </td>


                </tr>
            </tbody>
            </table>

                <div class="card-footer">
                    <router-link :to="{name:'editprofile'}" class="text-center  Edit-profile d-block font-weight-bold " style="cursor-pointer">
                         Edit Information <i class="fa fa-sliders"></i></router-link>

                    </div>
                </div>



  </div>
                            </div>
                    </div>
            </div>

             <div v-else-if="users.role_id ==6">


                        <div class="container mt-5">
                                <div class="row " dir="rtl">

                                            <div class="col-md-8">

                    <offers> </offers>

                                </div>

                                        <div class="col-md-4">

                <div class="card">
                    <div class="card-body">
                               <img src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" width="84" class="d-block mx-auto mr-2">
                               <div class="text-center text-dark font-weight-bold  mt-2"> {{users.name}}</div>


                                <small class=" mt-2 text-center text-muted font-weight-bold d-block">Consutlances</small>
                </div>
                             <table class="table table-striped" dir="ltr">
            <thead>
                <tr>
                <th scope="col"><i class="fa fa-user text-dark"></i> Manger Name</th>
                <th scope="col">{{manager_en}}</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="col"><i class="fa fa-envelope text-dark"></i> Email</th>
                <th scope="col">{{email}}</th>

                </tr>
                <tr>
            <th scope="col"><i class="fa fa-mobile text-dark"></i> Mobile</th>
                <td>{{mobile}}</td>


                </tr>
                <tr>
                <th scope="col"><i class="fa fa-phone text-dark"></i> phone</th>
                <td>{{phone}}</td>


                </tr>
                <tr>
                <th scope="col"><i class="fa fa-calendar text-dark"></i> date Create</th>
                <td>{{date_create}}</td>


                </tr>
                <tr>
                <th scope="col"><i class="fa fa-map text-dark"></i> Emratis</th>
                <td>
                    <span v-if="emirates==7">Abudabhi</span>
                    <span v-if="emirates==6">ajman</span>
                    <span v-if="emirates==5">sharja</span>
                    <span v-if="emirates==4">um alqwain</span>
                    <span v-if="emirates==3">Ras Alkhima</span>
                    <span v-if="emirates==2">Fujira</span>
                    <span v-if="emirates==1">Duabi</span>

                </td>


                </tr>
            </tbody>
            </table>

                <div class="card-footer">
                    <router-link :to="{name:'editprofile'}" class="text-center  Edit-profile d-block font-weight-bold " style="cursor-pointer">
                         Edit Information <i class="fa fa-sliders"></i></router-link>

                    </div>
                </div>



  </div>
                            </div>
                    </div>
            </div>


            <div v-else-if="users.role_id == 2">


                        <div class="container mt-5">
                                <div class="row " dir="rtl">
                                    <div class="col-md-6">

                        <div v-if="loading" class="spinner-border text-primary">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div v-else>

                                    <div class="card w-100 mb-4 ">
                                                    <div class="card-body scroll">
                        <p class="text-center font-weight-bold text-muted mb-0">Recent Ads</p>

                            <recentAds v-for="(recent,index) in recents" :key="index" v-bind="recent"></recentAds>
                            </div>

                        </div>


                            </div>
                        </div>
                                <div class="col-md-6">
                    <offers> </offers>
                    <NewAds></NewAds>
                                </div>
                            </div>
                    </div>
            </div>




            <div v-else-if="users.role_id ==3 ">


                        <div class="container mt-5">
                                <div class="row ">
                                    <div class="col-md-6">

                        <div v-if="loading" class="spinner-border text-primary">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div v-else>

                                    <div class="card w-100 mb-4 ">
                                                    <div class="card-body scroll">
                        <p class="text-center font-weight-bold text-muted mb-0">Recent Ads</p>

                            <recentAds v-for="(recent,index) in recents" :key="index" v-bind="recent"></recentAds>
                            </div>

                        </div>


                            </div>
                        </div>
                                <div class="col-md-6">
                    <offers> </offers>
                    <NewAds></NewAds>
                                </div>
                            </div>
                    </div>
            </div>





            <div v-else-if="users.role_id ==4">


                        <div class="container mt-5">
                                <div class="row " dir="rtl">
                                    <div class="col-md-6">

                        <div v-if="loading" class="spinner-border text-primary">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div v-else>

                                    <div class="card w-100 mb-4 ">
                                                    <div class="card-body scroll">
                        <p class="text-center font-weight-bold text-muted mb-0">Recent Ads</p>

                            <recentAds v-for="(recent,index) in recents" :key="index" v-bind="recent"></recentAds>
                            </div>

                        </div>


                            </div>
                        </div>
                                <div class="col-md-6">
                    <offers> </offers>
                    <NewAds></NewAds>
                                </div>
                            </div>
                    </div>
            </div>

            <div v-else-if="users.role_id ==5">

                        <div class="container mt-5">
                                <div class="row " dir="rtl">
                                    <div class="col-md-6">

                        <div v-if="loading" class="spinner-border text-primary">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div v-else>

                                    <div class="card w-100 mb-4 ">
                                                    <div class="card-body scroll">
                        <p class="text-center font-weight-bold text-muted mb-0">Recent Ads</p>

                            <recentAds v-for="(recent,index) in recents.data" :key="index" v-bind="recent"></recentAds>
                            </div>

                        </div>


                            </div>
                        </div>
                                <div class="col-md-6">
                    <offers> </offers>
                    <NewAds></NewAds>
                                </div>
                            </div>
                    </div>
            </div>



            <div v-else-if="users.role_id==10">





                <tenders></tenders>
            </div>
            <div v-else-if="users.role_id==11">
                <admin-dashboard></admin-dashboard>
            </div>
        </span>

    </div>
</template>



<script>

import { mapState, mapGetters } from "vuex";
import offers from '../v-dash/offers.vue'  ;

import NewAds from '../v-dash/NewAds.vue';
import recentAds from '../v-dash/recent.vue'  ;

import Login from '../auth/login.vue';
import Tenders from './tenders.vue';
import AdminDashboard from '../admin/AdminDashboard.vue';
import FilePondDemo from './FilePondDemo.vue'


export default {
    components:{
        offers,
        NewAds,
        recentAds,
        FilePondDemo,
        Login,
        Tenders,
        AdminDashboard,

    },
    props:{email:String,
         mobile:String,
         categories:String,
         manager_en:String,
         mobile:String,
         phone:String,
         date_create:String,
         manager_en:String,
         emirates:String,
         company_en:String,
         },

  data() {
    return {
      recents:null,
      photo:null,
      loading: false,
      users:null,
      userid:null


    };
  },
    computed: {
    ...mapState({

      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({

    }),
    IsUser(){
            return this.$store.getters.IsUser
        },
    },

async created() {


      await axios.get('api/company/profile').then(response=>{
        this.active = response.data;
      this.email = this.active.email;
      this.mobile = this.active.mobile;
      this.categories = this.active.company.categories;
      this.phone = this.active.company.phone;
      this.date_create = this.active.company.date_create;
      this.manager_en = this.active.company.manager_en;
      this.emirates = this.active.company.emirates;
      this.company_en = this.active.company.company_en;
});

this.loading = true;
    axios.get('/user').then(response=>{
        this.users= response.data;
        this.userid = this.users.id;

        });
if(this.IsUser==6){

    const  request = axios.get('/api/Ads/'+this.userid).then(response=>{
        this.recents = response.data;
        this.loading = false;


});
}


//const photo = (await axios.get(`/api/Ads/images/${this.recents.id}`)).data;


}
}

</script>

<style scope >
.Edit-profile{
color:#2e2e2e  !important;
}
.Edit-profile:hover{
color:#EB3349  !important;
transition: 0.5s ease-in-out !important;
}
.card{
border-radius:10px;
border:none;
box-shadow:none;
}
.scroll {
    max-height: 500px;
    overflow-y:scroll ;
    scroll-behavior: smooth;
    direction: ltr;

}
</style>
