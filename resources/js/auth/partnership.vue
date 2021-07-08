<template>
<div v-if="!isLoggedIn">



  <div class="m-auto ">



    <div class="card card-body" dir="ltr"  style="padding: 0 40px;">
        <h1 class="main-color text-center mt-5 mb-2"> Join To Our Family </h1>
      <form>

        <div class="form-group">
          <label for="name">User Name</label>
          <input
            type="text"
            name="name"
            placeholder="Enter your name"
            class="form-control"
            v-model="business.name"
            :class="[{'is-invalid': errorFor('name')}]"
          />
          <v-errors :errors="errorFor('name')"></v-errors>
        </div>



            <div class="form-group">
          <label for="email">E-mail</label>
          <input
            type="text"
            name="email"
            placeholder="Enter your e-mail"
            class="form-control"
            v-model="business.email"
            :class="[{'is-invalid': errorFor('email')}]"
          />
          <v-errors :errors="errorFor('email')"></v-errors>
            </div>

            <div class="form-group">
          <label for="password">Mobile Phone</label>
          <input
            type="number"
            name="mobile2"
            placeholder="+9715XXXXXXXX"
            class="form-control"
            v-model="business.mobile"
            pattern="^([+]{1}[9]{1}[7]{1}[1]{1}[5]{1}[0-9]{8})$"
            :class="[{'is-invalid': errorFor('mobile')}]"
          />
          <v-errors :errors="errorFor('mobile')"></v-errors>
            </div>


        <div class="form-group">
          <label for="password">Categories</label>
      <select class="form-control"  v-model="business.Categories"  :class="[{'is-invalid': errorFor('Categories')}]">
          <option disabled value="">-- select Category--</option>
          <option value="1">consulting</option>
          <option value="2">Furniture</option>
          <option value="3">Stone</option>
          <option value="4">Havc</option>
          <option value="5">interior design</option>
          <option value="6">construction </option>
      </select>
          <v-errors :errors="errorFor('Categories')"></v-errors>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            name="password"
            placeholder="Enter your password"
            class="form-control"
            v-model="business.password"
            :class="[{'is-invalid': errorFor('password')}]"
          />
          <v-errors :errors="errorFor('password')"></v-errors>
        </div>

        <div class="form-group">
          <label for="password_confirmation">Re-type Password</label>
          <input
            type="password"
            name="password_confirmation"
            placeholder="Confirm your password"
            class="form-control"
            v-model="business.password_confirmation"
            :class="[{'is-invalid': errorFor('confirmed')}]"
          />
          <v-errors :errors="errorFor('confirmed')"></v-errors>
        </div>

        <div class="form-group">
<div :class="alertT" class="alert alert-success"    >You Register Successfuly - <a href="\login"> Login Now </a></div>
        <button
          type="submit"
          class="btn btn-bus btn-lg text-light btn-block mx-auto"
          :disabled="loading"
          @click.prevent="BusRegister"
          style="padding: 15px 10px;"
        >Register</button>
        </div>




      </form>
    </div>




  </div>

  </div>

</template>

<script>
import { mapState, mapGetters } from "vuex";
import { logIn } from "./../shared/utils/auth";
import navbar from './navbar.vue';
import ValidationErrors from '../shared/components/ValidationErrors.vue';
import validationErrors from "../shared/mixins/validationErrors";
export default {
  components: { navbar, ValidationErrors },
  mixins: [validationErrors],
  data() {
    return {

       business: {
        name: null,
        email: null,
        Categories: null,
        password: null,
        password_confirmation: null,
        mobile: null
      },
      loading: false,

       alertT:'d-none',
       alert:'d-none',


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

     async BusRegister() {
         this.errors = null;
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

<style lang="scss" scoped>

.tabs-choose {
    margin-bottom: 0;
    li {
      display: inline-block;
      padding: 10px 20px;
      background-color: #eee;
      cursor: pointer;
      opacity: 0.3;
      &.active {
        opacity: 1;
      }
    }
  }




.links-urls {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 10px;
  .link {
    padding: 10px 20px;
    display: block;
    background-color: #EEE;
    margin-bottom: 10px;
    text-decoration: none;
    color: #777;
  }
}



</style>
