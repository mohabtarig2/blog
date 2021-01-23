<template>
    <div  >
        <span class="nav-item" v-if="isLoggedIn">
<h1 class="text-muted text-center mt-5">Dashboard</h1>
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
        </span>
    <span v-else>

<Login></Login>
    </span>
    </div>
</template>



<script>


import offers from '../v-dash/offers'  ;
import NewAds from '../v-dash/NewAds'  ;
import recentAds from '../v-dash/recent'  ;

import { mapState, mapGetters } from "vuex";
import Login from '../auth/login.vue';
export default {
    components:{
        offers,
        NewAds,
        recentAds,
        Login,

    },
  data() {
    return {
      recents: null,
      loading: false,
    };
  },
    computed: {
    ...mapState({

      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({

    }),

  },

created() {

this.loading = true;
    const  request = axios.get('/api/Ads').then(response=>{
        this.recents = response.data;
        this.loading = false;

});


  }
};


</script>

<style scope >
.card{
border-radius:10px;
border:none;
box-shadow:2;
}
.scroll {
    max-height: 500px;
    overflow-y:scroll ;
    scroll-behavior: smooth;
    direction: ltr;

}
</style>
