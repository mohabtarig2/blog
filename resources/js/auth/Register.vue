<template>
<div v-if="!isLoggedIn" style="width:500px" class="mx-auto mt-5">



  <div class="w-100 m-auto ">




    <div class="card card-body">
         <h1 class="text-center font-weight-bold mb-5 " style="font-size:2rem">  Register New Account</h1>
        <div class="alert alert-success" :class="alert">success Register - <a href="\login"> Login Now </a> </div>
      <form>
        <div class="form-group">

          <input
            type="text"
            name="name"
            placeholder="Enter your name"
            class="form-control"
            v-model="user.name"
            :class="[{'is-invalid': errorFor('name')}]"
          />
          <v-errors :errors="errorFor('name')"></v-errors>
        </div>


        <div class="form-group">

          <input
            type="text"
            name="email"
            placeholder="Enter your e-mail"
            class="form-control"
            v-model="user.email"
            :class="[{'is-invalid': errorFor('email')}]"
          />
          <v-errors :errors="errorFor('email')"></v-errors>

        </div>

    <div class="form-group">
          <input
            type="mobile"
            name="password"
            placeholder="Enter your password"
            class="form-control"
            v-model="user.mobile"
            :class="[{'is-invalid': errorFor('mobile')}]"
          />
          <v-errors :errors="errorFor('mobile')"></v-errors>

    </div>

        <div class="form-group mt-4">

          <input
            type="password"
            name="password"
            placeholder="Enter your password"
            class="form-control"
            v-model="user.password"
            :class="[{'is-invalid': errorFor('password')}]"
          />
          <v-errors :errors="errorFor('password')"></v-errors>
        </div>

        <div class="form-group">

          <input
            type="password"
            name="password_confirmation"
            placeholder="Confirm your password"
            class="form-control"
            v-model="user.password_confirmation"
            :class="[{'is-invalid': errorFor('confirmed')}]"
          />
          <v-errors :errors="errorFor('confirmed')"></v-errors>
        </div>

        <button
          type="submit"
          class="btn btn-user btn-lg mt-5 mx-auto btn-block"
          :disabled="loading"
          @click.prevent="register"
        >Register</button>




        <p class="text-muted container mt-5 mx-auto text-center font-weight-bold">Already have an account? <a href="/login" style="color:#FF8008  "> Login</a></p>
      </form>
    </div>





  </div>
</div>
</template>

<script>
import { mapState, mapGetters } from "vuex";
import validationErrors from "../shared/mixins/validationErrors";
import { logIn } from "./../shared/utils/auth";
import navbar from './navbar.vue';
export default {
  components: { navbar },
  mixins: [validationErrors],
  data() {
    return {
      user: {
        name: null,
        email: null,
        password: null,
        password_confirmation: null,
        mobile: null
      },
       business: {
        name: null,
        email: null,
        Categories: null,
        password: null,
        password_confirmation: null,
        mobile: null
      },
      loading: false,
       activeTab : '1',
       alertT:'d-none',
       alert:'d-none',
       errors:[],

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
    async register() {
      this.loading = true;
      this.errors = null;
      try {
        const response = await axios.post("register", this.user);
        if (201 == response.status) {


        this.alert=' ';
        }
      } catch (error) {
        this.errors = error.response && error.response.data.errors;
      }
      this.loading = false;
    },
     async BusRegister() {
          this.loading = true;
     try {
        const response = await axios.post("bregister", this.business);
        if (201 == response.status) {

          this.alertT=' ';
        }
      } catch (error) {
        this.errors = error.response && error.response.data.errors;
      }
      this.loading = false;

    }


  }
};
</script>


<style scoped>

.btn-bus {background-image: linear-gradient(to right, #EB3349 0%, #F45C43  51%, #EB3349  100%)}
.btn-bus {
   margin: 10px;
   padding: 12px 20px!important;
   text-align: center;
    font-size: 14px;
   text-transform: uppercase;
   transition: 0.5s;
   background-size: 200% auto;
   color: white;
   box-shadow: 0 0 20px #eee;
       margin-top: 1.5rem!important;
   border-radius: 10px;
   display: block;
 }

 .btn-bus:hover {
   background-position: right center; /* change the direction of the change here */
   color: #fff;
   text-decoration: none;
 }


.btn-user {background-image: linear-gradient(to right, #FF8008 0%, #FFC837  51%, #FF8008  100%)}
.btn-user {
   margin: 10px;
   padding: 12px 20px!important;
   font-size: 14px;
   text-align: center;
   text-transform: uppercase;
   transition: 0.5s;
   background-size: 200% auto;
   color: white;
   box-shadow: 0 0 20px #eee;
   border-radius: 10px;
   display: block;
 }

 .btn-user:hover {
   background-position: right center; /* change the direction of the change here */
   color: #fff;
   text-decoration: none;
 }
 .form-group .form-control{
     border-top:0;
     padding: 0;
     border-left:0;
     border-right:0;
     border-bottom:1px solid #c7c6c6;
         border-bottom-right-radius: 0;
     border-bottom-left-radius: 0;
     font-size: 14px;
 }
textarea:focus,
textarea.form-control:focus,
input.form-control:focus,
input[type=text]:focus,
input[type=password]:focus,
input[type=email]:focus,
input[type=number]:focus,
[type=text].form-control:focus,
[type=password].form-control:focus,
[type=email].form-control:focus,
[type=tel].form-control:focus,
[contenteditable].form-control:focus {
  box-shadow: inset 0 -1px 0 #FFC837;

}
</style>
