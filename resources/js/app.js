require("./bootstrap");
import router from "./routes"
import VueRouter from 'vue-router';
import Vuex from 'vuex'
import Index from './index.vue';
import login from './auth/login'
import navbar from './auth/navbar'
import Register from './auth/Register'
import reset from './auth/reset'
import resetpassword from './auth/reset-password'
import partnership from './auth/partnership'
import showoffers from './auth/showOffers'
import FatalError from "./shared/components/FatelError";
import Success from "./shared/components/Success";
import ValidationErrors from "./shared/components/ValidationErrors";
import storeDefinition from "./store";
import axios from "axios";
import '@morioh/v-lightbox/dist/lightbox.css';
import Vue from 'vue'
import Lightbox from '@morioh/v-lightbox'
import InfiniteLoading from 'vue-infinite-loading';

//import carousel from 'vue-owl-carousel';






import VueLuxon from "vue-luxon";



window.Echo.channel("newComment").listen('NewComment',function(e){
    alert(e.message)
});

window.Echo.channel("newTender").listen('NewTender',function(e){
    alert(e.message)
});
window.Echo.channel("acceptTender").listen('AcceptTender',function(e){
    alert(e.message)
});

window.Echo.channel("commentConsr").listen('commentConsr',function(e){
    alert(e.message)
});



window.Vue = require("vue").default
Vue.use(InfiniteLoading, { /* options */ });
Vue.use(VueRouter);
Vue.use(Vuex);
Vue.use(Lightbox);
Vue.use(VueLuxon, {
    templates: {},
      input: {
          zone: "utc",
          format: "iso"
      },
      output: {
          zone: "local",
          format: {
              year: "numeric",
              month: "long",
              day: "numeric",

          },
          locale: null,
          relative: {
              round: true,
              unit: null
          }
      }
  });

//Vue.filter("fromNow", value => moment(value).fromNow());

//Vue.component("example-component",require("./components/ExampleComponent.vue").default);


//Vue.component("example-2",require("./components/Example2.vue").default);

Vue.component("fatal-error", FatalError);
Vue.component("success", Success);
Vue.component("v-errors", ValidationErrors);
Vue.component('pagination', require('laravel-vue-pagination'));
//Pusher.logToConsole = true;

const store = new Vuex.Store(storeDefinition);

window.axios.interceptors.response.use(
    response => {
        return response;
    },
    error => {
        if (401 === error.response.status) {
            store.dispatch("logout");
        }

        return Promise.reject(error);
    }
);


const app = new Vue({
    el: "#app",
    router,
    store,
    components:  {
        index:Index,
        login:login,
        Register:Register,
        resetpassword:resetpassword,
        reset:reset,
        partnership:partnership,
        showoffers:showoffers,




    },
    async beforeCreate() {

        this.$store.dispatch("loadStoredState");

        this.$store.dispatch("loadUser");


    },
});



