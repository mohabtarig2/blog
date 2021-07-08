<template>
    <div>







        <div class="card">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">



        <span class="badge badge-success pt-2 pb-2 pl-2 pr-2" v-if="status==1">open</span>
        <span class="badge badge-warning pt-2 pb-2 pl-2 pr-2" v-if="status==0">under process</span>
        <span class="badge badge-dark pt-2 pb-2 pl-2 pr-2"    v-if="status==2">closed</span>


         <router-link class="font-weight-bold ml-2" :to="{name:'ConslTender',params:{id} }">{{title}}</router-link>

        <div class="mt-1">
            <sub class="fa fa-clock-o text-muted "> {{created_at | luxon({ input: "server" }) }} </sub>
            <sub class="fa  fa-ticket text-muted">
{{count}}
                 offers</sub>
            <p class="mt-2">
                <a>
                    {{note}}

                    </a>
                 </p>

        </div>
    </li>



  </ul>
</div>

    </div>
</template>

<script>
import offerTender from './offerTender.vue';

export default {
  components: { offerTender },

     props:{title:String,note:String,id:Number,status:Number,AllOffers:Number,created_at:Date,count:Number,consulte:String} ,
     mounted() {
            console.log(this.title);
        },
        created() {
 axios.get(`/mytenders/CountcComment/${this.id}`).then(response=>{
this.count = response.data;

});
        },
};
</script>

<style scoped>
.badge-warning {
    background-color: #ffae4a
}
</style>
