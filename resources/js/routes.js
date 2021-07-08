import VueRouter from 'vue-router';
import Example2 from './components/Example2';
 import bookables from './bookables/bookables';
 import Bookable from './bookable/bookable';
 import Dashboard from './dashboard/Dashboard';
 import alloffers from './dashboard/alloffers';
 import MyOffer from './dashboard/MyOffer';
 import offerdetails from './dashboard/offerdetails';
 import Settings from './dashboard/Settings';
 import FacedVilla from './dashboard/FacedVilla';
 import recent from './v-dash/recent';
 import CoastVilla from './dashboard/CoastVilla';
 import editprofile from './dashboard/editprofile.vue';
 import profile from './dashboard/profile';
 import Projects from './dashboard/projects.vue';
 import Project from './dashboard/project.vue';
 import consultances from './tenders/consultances';
 import constructionTender from './tenders/constructionTender';
 import consrDetails from './tenders/consrDetails.vue'
 import login from './auth/login';
 import reset from './auth/reset';
 import showAllOfferClient from './auth/showAllOfferClient';
 import Register     from './auth/Register';
 import password     from './auth/password';
 import offerClientDetails     from './auth/offerClientDetails';
 import resetpassword     from './auth/reset-password';
 import mytenders from './tenders/mytenders';
 import ConslTender from './tenders/ConslTender';
 import AllNotification from './AllNotification.vue';
 import ConsluteTender from './admin/tenderConslute.vue';
 import ConsrTender from './admin/tenderConsr.vue';
 import tcDtails from './admin/tenderConsulteDetails.vue';
 import consrDtails from './admin/tenderConsrDetails.vue';
 import paypal from './payment/paypal.vue';
 import visa from './payment/visa.vue';
 //import adminDashboard from './admin/adminDashboard.vue';







const routes = [

    {
        path:"/visa",
     component:visa,
     name:'visa',


 },
 {
    path:"/paypal",
 component:paypal,
 name:'paypal',


},

    {
        path:"/recent",
     component:recent,
     name:'recent',


 },
 {
    path:"/offer/details/:id",
 component:offerClientDetails,
 name:'offerClientDetails',


},
 {
    path:"/offers/all-offers",
 component:showAllOfferClient,
 name:'showAllOfferClient',


},

{
        path:"/login",
     component:login,
     name:'login',


 },

 {
 path:"/Register",
 component:Register,
 name:'Register',
 },

 {
    path:"/password/reset/:token",
 component:resetpassword,
 name:'resetpassword',


},
{
    path:"/password/reset",
 component:reset,
 name:'reset',


},
 {
  path:"/tenders/construction/:id",
    component:consrDetails,
    name:'consrDetails'
    },
    {
        path:"/ConsrTender",
        component:ConsrTender,
        name:'ConsrTender',
        },
 {
    path:"/Conslute-Tenders",
    component:ConsluteTender,
    name:'ConsluteTender',
    },

    {
        path:"/Conslute-Tenders/:id",
        component:tcDtails,
        name:'tcDtails',
    },
    {
        path:"/construction-Tenders/:id",
        component:consrDtails,
        name:'consrDtails',
    },

 {
    path:"/tenders/consultances",
    component:consultances,
    name:'consultances',
 },
    {
    path:"/tenders/construction",
    component:constructionTender,
    name:'consturction'
    },
 {
 path:"/tenders/construction-tender",
 component:constructionTender,
 name:'constructionTender',
},
 {
    path:"/mytenders",
    component:mytenders,
    name:'mytenders',
 },
 {
    path:"/mytenders/ConslTender/:id",
    component:ConslTender,
    name:'ConslTender',
 },

 {
    path:"/account/profile",
    component:editprofile,
    name:'editprofile',
    },

        {
        path:"/profile",
        component:profile,
        name:'profile',
        },

        {
            path:"/Projects",
            component:Projects,
            name:'Projects',
            },
            {
                path:"/Projects/1002:id",
                component:Project,
                name:'project',
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
        path:"/notifications",
        component:AllNotification,
        name:'AllNotification',
    },
    {
        path: "/bookable/:id",
        component:Bookable,
        name:'bookable',
    },
    {
        path: "/myads/all",
          component:alloffers,
          name:'alloffers',
      },

    {
        path: "/myads",
          component:MyOffer,
          name:'MyOffer',
      },
      {
        path:"/myads/details/:id",
     component:offerdetails,
     name:'offerdetails',


    },
      {
        path: "/Settings",
          component:Settings,
          name:'Settings',
      },
      {
        path: "/Settings/password",
          component:password,
          name:'password',
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
