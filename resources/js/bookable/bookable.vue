<template>
    <div class="row">

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                     <div v-if="loading" class="spinner-border text-primary">
      <span class="sr-only">Loading...</span>
    </div>
                    <div v-else>
                    <h2 class="text-primary">{{bookable.title}}</h2>
                    <hr>
                    <article>{{bookable.description}}</article>

                </div>

            </div>
            </div>


        </div>
        <div class="col-md-4">
<availability> </availability>
        </div>

    </div>
</template>

<script>
import Availability from './availability'  ;
export default {
    components:{
        Availability
    },
    data(){
        return{
            bookable:null,
            loading:false
        }
    },
    created(){
        this.loading=true;
       axios
       .get(`/api/bookables/${this.$route.params.id}`)
       .then(response=>(this.bookable=response.data.data));
        this.loading=false;
    }

};
</script>
