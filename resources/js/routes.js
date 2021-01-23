import VueRouter from 'vue-router';
import Example2 from './components/Example2';
 import bookables from './bookables/bookables';
 import Bookable from './bookable/bookable';
 import Dashboard from './dashboard/Dashboard';
 import Ads from './dashboard/MyAds';
 import MyOffer from './dashboard/MyOffer';
 import Settings from './dashboard/Settings';
 import FacedVilla from './dashboard/FacedVilla';
 import CoastVilla from './dashboard/CoastVilla';
 import login from './auth/login';
 import Register     from './auth/Register';






const routes = [
    {

        path:"/login",
     component:login,
     name:'login',

    /* path:"/",
     component:bookables,
     name:'home',
     */
 },
 {
 path:"/Register",
 component:Register,
 name:'Register',
 },
    {

           path:"/",
        component:Dashboard,
        name:'Dashboard',

       /* path:"/",
        component:bookables,
        name:'home',
        */
    },
    {
        path: "/bookable/:id",
        component:Bookable,
        name:'bookable',
    },
    {
      path: "/Ads",
        component:Ads,
        name:'Ads',
    },

    {
        path: "/MyOffer",
          component:MyOffer,
          name:'MyOffer',
      },
      {
        path: "/Settings",
          component:Settings,
          name:'Settings',
      },
      {
        path: "/FacedVilla",
          component:FacedVilla,
          name:'FacedVilla',
      },
      {
      path: "/CoastVilla",
      component:CoastVilla,
      name:'CoastVilla',
    }


];


const router = new VueRouter({
    routes,

});

export default router ;
