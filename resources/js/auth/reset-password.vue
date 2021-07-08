

<template>
<div v-if="!isLoggedIn" style="width:500px" class="mx-auto mt-5">


<div class="d-flex w-100 mx-auto align-items-center" >

<div class="card card-body">
    <h1 class="text-center font-weight-bold " style="font-size:2rem">reset password </h1>
    <form >
        <div class="alert alert-success" v-if="link!=null">
            {{link}}
        </div>

        <div class="form-group">

            <input type="text"
             name="email"
             placeholder="Enter your Email"
              class="form-control"
              v-model="email"
             :class="[{'is-invalid': errorFor('email')},{'is-invalid': errorFor('email')}]"
          />
          <v-errors :errors="errorFor('email')"></v-errors>


        </div>

              <div class="form-group">

            <input type="password"
             name="email"
             placeholder=" password"
              class="form-control"
              v-model="password"
             :class="[{'is-invalid': errorFor('password')},{'is-invalid': errorFor('password')}]"
          />
          <v-errors :errors="errorFor('password')"></v-errors>


        </div>

          <div class="form-group">

            <input type="password"
             name="email"
             placeholder=" Confirm Password"
              class="form-control"
              v-model="password_confirmation"
             :class="[{'is-invalid': errorFor('password_confirmation')},{'is-invalid': errorFor('password_confirmation')}]"
          />
          <v-errors :errors="errorFor('password_confirmation')"></v-errors>


          </div>


        <button type="submit" class="btn btn-bus d-bloc mx-auto btn-lg btn-block" :disabled="loading" @click.prevent="reset">send password reset link</button>



 </form>
</div>
</div>

</div>
</template>

<script>
import { mapState, mapGetters } from "vuex";
import ValidationErrors from '../shared/components/ValidationErrors.vue';
import validationErrors from "../shared/mixins/validationErrors";
import navbar from './navbar.vue';


export default {
  components: { navbar, ValidationErrors },
    mixins:[validationErrors],

data() {

    return {
      email: null,
      password:null,
      password_confirmation:null,
      link:null,
      loading: false,
      errors:''

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
     async reset() {
      this.loading = true;
      this.errors = null;


       try {
        await axios.post("/password/reset", {
                        email: this.email,
                        password:this.password,
                        password_confirmation:this.password_confirmation

                }).then(res=>{
                    this.link=res.data.message;
                });

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
   padding: 15px 45px;
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
  box-shadow: inset 0 -1px 0 #EB3349;

}
</style>
