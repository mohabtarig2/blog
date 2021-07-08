<template>
    <div class="container" >
<div class="row mt-5">
    <!-- <div class="col-4">
        <a class="btn btn-light form-control mb-2">Conslute <span class="badge badge-primary">{{count}}</span></a>
        <a class="btn btn-light form-control mb-2">construction</a>
        <a class="btn btn-light form-control mb-2">interior design</a>
        <a class="btn btn-light form-control mb-2">have</a>

    </div>
    !-->

    <div class="col-8">
         <h4 class="text-muted"> Consulate tenders</h4>

        <consl-tenders
          v-for="(tender,index) in tenders.consulte"
        :key="index"
        v-bind="tender"></consl-tenders>


        <h4 class="text-muted"> Construcion tenders</h4>

               <div class="card" v-for="(tendercr,index) in tenders.consr" :key="index">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">


        <sup class="badge badge-success pt-2 pb-2 pl-2 pr-2" v-if="tendercr.status==1"> open</sup>
        <sup class="badge badge-light pt-2 pb-2 pl-2 pr-2" v-if="tendercr.status==0"> under process</sup>
        <sup class="badge badge-dark pt-2 pb-2 pl-2 pr-2"    v-if="tendercr.status==2"> closed</sup>


         <router-link class="font-weight-bold ml-2" :to="`/tenders/construction/${tendercr.id}`">{{tendercr.title}}</router-link>
        <br>
       <div class="mt-3"> {{tendercr.notes}}</div>
    </li>



  </ul>
</div>



    </div>

</div>
    </div>

</template>

<script>

import FilePondDemo from '../dashboard/FilePondDemo.vue';
import ConslTenders from './ConslTenders.vue'

import consultances from './consultances.vue'
export default {
  components: { consultances, ConslTenders, FilePondDemo },
data() {
    return {
      tenders: [],
      count:null ,


    };
  },


  created() {

    this.loading = true;

const  request = axios.get('/AllMyTenders').then(response=>{
this.tenders =response.data;
this.loading = false;
});









 axios.get('/CountCtender').then(response=>{
this.count = response.data;

});



    //setTimeout ==
  }

}
</script>
