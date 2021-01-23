<template>
    <div>
        <nav class="navbar bg-white border-bottom navbar-light mb-2">
            <div class="container">
  <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'Register'}" class="nav-link">Register</router-link>
        </span>

        <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'login'}" class="nav-link">Sign-in</router-link>
        </span>
        <span class="nav-item" v-else>

                <user-profile
     :name="users.name"
      >

                </user-profile>

        </span>

        <span class="nav-item" v-if="isLoggedIn">
          <a class="nav-link" href="#" @click.prevent="logout">Logout</a>
        </span>
            </div>

        </nav>

       <div class="sidebar" v-if="isLoggedIn">
    <div class="main-menu">
       <ul class="list-unstyled">
       <li>
            <router-link class="navbar-brand mr-auto" :to="{name:'Dashboard'}">Dashboard</router-link>
        </li>
         <li >

              <div  @click="seen = !seen" class="control">
                        <a class=""><b>My Ads</b></a >
</div>

                    <div v-if="!seen" id="hide">
                         <router-link class=" " :to="{name:'CoastVilla'}"> villa with  coast</router-link>
                         <router-link class="" :to="{name:'FacedVilla'}"> Faced Villas </router-link>
                    </div>


        </li>



         <li>
        <router-link class="btn nav-button" :to="{name:'MyOffer'}">My Offer</router-link>
        </li>

    <li>
        <router-link class="btn nav-button" :to="{name:'Settings'}">Settings</router-link>
    </li>



      </ul>
      </div>
    </div>

      <router-view>

        </router-view>

    </div>

</template>
<script>
import { mapState, mapGetters } from "vuex";
import userProfile from './v-dash/users.vue';
export default {
   components: {
    userProfile
  },

  data() {
     return{
        seen : true,
        users:null
        };
  },

  computed: {
    ...mapState({

      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({

    }),

  },
  methods: {
    async logout() {
      try {
        axios.post("/logout");
        this.$store.dispatch("logout");
      } catch (error) {
        this.$store.dispatch("logout");
      }
    }
  },
    created() {

        const  request = axios.get('/user').then(response=>{
        this.users= response.data;

        });

    //setTimeout ==
  }
};

</script>



<style scoped>
.sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    padding-top: 100px;
    z-index: 4;
    height: calc(100% - 100px);
    -webkit-transition: border-radius .3s;
    transition: border-radius .3s;
}

.sidebar .main-menu {
    width: 120px;
    height: calc(100% - 100px);
    background: #fff;
    z-index: 3;
    position: fixed;
    padding-top: 10px;
    padding-bottom: 10px;
    left: 0;
}

.sidebar .main-menu ul li {
    position: relative;
}
.sidebar .main-menu ul li a {
    height: 110px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 13px;
    font-style: normal;
    font-weight: 400;
    border-bottom: 1px solid #f3f3f3;
    color: #3a3a3a;
    -webkit-transition: color .3s;
    transition: color .3s;
    -webkit-transition: background .3s;
    transition: background .3s;
    list-style: none;
}
</style>
