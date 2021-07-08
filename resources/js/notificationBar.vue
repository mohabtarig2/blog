<template>



    <div class="dropdown mb-3">

    <button class="dropbtn nav-link" >
      <i class="fa fa-bell"></i>

      <span class="badge badge-danger" v-if="notificationlist.length>0"> {{notificationlist.length}}</span>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" >
      <div class="media p-2" v-for="(n,i) in notificationlist" :key="i" >
<span v-if="n.data.TenderAccepted" >
  <router-link :to="`/mytenders/ConslTender/${n.data.TenderAccepted.id}`" target="_blank">
        <div class="media-body">


           <div class="mt-0 text-dark"><strong> Your Tender has </strong><i class="text-success">accept</i></div>
          {{n.data.TenderAccepted.title}}

          <p class="m-0 text-dark"><i class="fa fa-clock-o mr-1 "></i> 1 hour ago</p>

        </div>
        </router-link>

</span>
<span v-if="n.data.tender" >


        <div class="media-body">
          <div class="mt-0 text-dark"><strong> The Company </strong>added Offer For Your Tender
          </div>
          <router-link :to="`/mytenders/ConslTender/${n.data.tender.id}`" target="_blank">{{n.data.tender.title}}</router-link>

          <p class="m-0 text-dark"><i class="fa fa-clock-o mr-1"></i> 1 hour ago</p>
        <hr>
        </div>

</span>
      </div>

      <div >
          <router-link :to="{name:'AllNotification'}"
 class="see-all"><i class="fa fa-bell-o mr-2"></i>See All </router-link>

      </div>

    </div>
  </div>



</template>

<script>


export default({
      mounted() {

            this.getUnreadNotificatons();
        },
    methods: {

        getUnreadNotificatons(){
            axios.get('/getLastTenNotifications').then(res=>{
                console.log(res.data);
               this.$store.state.notificationlist = res.data;


            }).catch(err=>{
                console.log(err);
            })
        }
    },
computed:{
    notificationlist(){
        return this.$store.state.notificationlist
    }
}
})
</script>

<style scoped>
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color:#ccc;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #686e73;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
 min-width: 287px;
    max-height: 400px;
    overflow: auto;
}
.dropdown-content .media-body>div{font-size: 15px;
    line-height: 1.3;}
.dropdown-content .media-body a{
  float: none;
  color: #1580dc;background: none;
  text-decoration: none;
  display: block;
  text-align: left;
}
.see-all{
  color: #000;
    background: #e4dede;
    text-decoration: none;
    text-align: center !important;
    display: block;
    padding: 4px;
}
.dropdown-content p{
  font-size: 14px;
}
.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
