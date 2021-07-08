<template>
<div>

<title-tender v-for="(tender,index) in tenders"
        :key="index"
        v-bind="tender"></title-tender>

<div class="container">
<div class="row">
    <div class="col-7">
<stage v-for="(tender,index) in tenders"
        :key="index"
        v-bind="tender">

    </stage>

 <div class="card mt-2" >
  <ul class="list-group list-group-flush">
    <li class="list-group-item h5">About The Project</li>
    <aboutTender v-for="(tender,index) in tenders"
        :key="index"
        v-bind="tender"></aboutTender>

  </ul>
</div>


<div class="card mt-2" >
  <ul class="list-group list-group-flush">
    <li class="list-group-item h5">Offers <small class="text-muted">({{count}})</small></li>

<span v-for="tender,index in tenders" :key="index">
<span v-for="(Comment , index) in tender.all_offers" :key="index" v-bind="Comment" >
    <div class="container">

        <li class="list-group-item" >

        <span  class="h5 text-primary font-weight-bold">{{Comment.com_id}}</span>
        <i class="fa fa-star "></i>
        <i class="fa fa-star "></i>
        <i class="fa fa-star "></i>
        <i class="fa fa-star text-op"></i>
    </li>
    <li class="list-group-item mb-2">

  {{Comment.comment}}
  <div class="files">
<table class="table table-striped">
  <thead>
          <tr>
      <th scope="col">Total Area Build</th>
      <th scope="col">{{Comment.TotalAreaBuild}} </th>

    </tr>
    <tr>
      <th scope="col">Budget</th>
      <th scope="col">{{Comment.budget}} AED</th>

    </tr>
  </thead>

  <tbody>
    <tr>


      <td>File</td>
      <td><i class="fa fa-pdf"><img :src="'offers/'+ name" width="300"></i>
      <a :href="'offers/'+ Comment.name" download><i class="fa fa-download  text-dark font-wieght-font"><span class="font-weight-bold"> download</span> </i></a>

      </td>
    </tr>

  </tbody>
</table>
  </div>
  <button class="btn btn-success" v-if="Comment.com_id">Accept</button>
  <button class="btn btn-secondary">report </button>
    </li>


</div>
</span>
</span>
  </ul>
</div>
    </div>
    <div class="col-5">
<partsconsl  v-for="(tender,index) in tenders"
        :key="index"
        v-bind="tender">
        </partsconsl>


    </div>
</div>
</div>


</div>

</template>

<script>
import Offers from './offerTender.vue';
import AboutTender from './aboutTender.vue';
import partsconsl from './partsconsl.vue';
import stage from './stages.vue';
import TitleTender from './titleTender.vue';


export default {
  components: { partsconsl, stage, TitleTender, AboutTender, Offers },

    data(){
        return{

            tenders:null,
            title:null,
            all_offers:[],
            count:null
        }
    },
    created(){

       axios
       .get(`/mytenders/ConslTender/${this.$route.params.id}`)
       .then(response=>(
           this.tenders=response.data,
           this.all_offers.push(this.tenders.alloffers)

           ));



 axios.get(`/mytenders/CountcComment/${this.$route.params.id}`).then(response=>{
this.count = response.data;
//this.count.unshift(response.data)

});
    }

};
</script>

<style>
.fa-star {
    color:#ffc107;
}
.text-op{
    color:#aeabab80;
}
</style>
