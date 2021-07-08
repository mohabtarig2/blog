<template>
  <div class="container mr-5 mt-5">
      <div class="card">
          <div class="card-header"><h3>notifications </h3></div>
          <div class="card-body">

                    <div class="media p-2" v-for="(n,i) in notificationlist" :key="i" >


     <span v-if="n.data.offer_owner" >

       <img class="mr-2" style="    height: 60px;width: 60px;"
             src="https://www.kindpng.com/picc/m/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png" alt="commenter image">
        <div class="media-body">
          <div class="mt-0"><strong> The Company </strong>added Offer For Your Tender
          <i class="fa fa-check float-right" style="cursor:pointer" :class="n.raed_at ? 'text-success':'text-danger'" @click="markAsRead(n,$event)"></i>
          </div>
          <router-link :to="`/mytenders/ConslTender/${n.data.tender.id}`" target="_blank">{{n.data.tender.title}}</router-link>

          <p class="m-0"><i class="fa fa-clock-o mr-1"></i> 1 hour ago</p>
        <hr>
        </div>
     </span>
                <span v-else-if="n.data.TenderAccepted" >
  <router-link :to="`/mytenders/ConslTender/${n.data.TenderAccepted.id}`" target="_blank">
        <div class="media-body">


           <div class="mt-0 text-dark"><strong> Your Tender has </strong><i class="text-success">accept</i></div>
          {{n.data.TenderAccepted.title}}

          <p class="m-0 text-dark"><i class="fa fa-clock-o mr-1 "></i> 1 hour ago</p>

        </div>
        </router-link>

</span>

                 <span v-else-if="n.data.Tender_owner" >
                      <router-link       :to="{name:'tcDtails',params: { id: n.data.tender.id }}" target="_blank">

        <div class="media-body">


           <div class="mt-0 text-dark"><strong> you have new tender </strong><i class="text-danger">new</i></div>
          {{n.data.tender.title}}

          <p class="m-0 text-dark"><i class="fa fa-clock-o mr-1 "></i> 1 hour ago</p>

        </div>
        </router-link>

</span>


      </div>

          </div>
      </div>
  </div>
</template>

<script>
export default {
    date(){
        return{
            notifications:[]
        }
    },
    mounted() {
        this.getAllNotification();
    },
    methods: {
        markAsRead(n,event){
            axios.put('NotificatonsMarkAsRead',{id:n.id}).then(res=>{
                console.log(res.data);
                if(res.data.msg=="ok"){
                    event.target.classList.remove('text-danger');
                    event.target.classList.add('text-success');
                }
            }).catch(err=>{
                console.log(err);
            })
        },

        getAllNotification(){
            axios.get('/getAllNotificatons')
            .then(res=>{
                this.$store.state.notificationlist = res.data;
            })
        }
    },
    computed:{
    notificationlist(){
        return this.$store.state.notificationlist
    }
    }
}
</script>

<style scoped>
.media{
    padding:10px;
}
</style>
