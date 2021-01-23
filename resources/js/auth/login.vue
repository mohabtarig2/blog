

<template>

<div class="d-flex w-50 m-auto align-items-center">

<div class="card card-body">
    <h1 class="text-center">Login Form</h1>
    <form >
        <div class="form-group">
            <label for="email">email</label>
            <input type="text"
             name="email"
             placeholder="Enter your Email"
              class="form-control"
              v-model="identify"
             :class="[{'is-invalid': errorFor('identify')}]"
          />
          <v-errors :errors="errorFor('identify')"></v-errors>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password"
             name="password"
             placeholder="Enter your password"
              class="form-control"
              v-model="password"
             :class="[{'is-invalid': errorFor('identify')}]"
          />
          <v-errors :errors="errorFor('identify')"></v-errors>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block" :disabled="loading" @click="login">Submit</button>
 </form>
</div>
</div>
</template>

<script>
import validationErrors from "../shared/mixins/validationErrors";
import { logIn } from "./../shared/utils/auth";


export default {
    mixins:[validationErrors],

data() {

    return {
      identify: null,
      password:null,
      loading: false
    };
  },
   methods: {
    async login() {
      this.loading = true;
      this.errors = null;
      try {

         await axios.get('/sanctum/csrf-cookie').then(response => {
	console.log(response)
})
.catch(error => {
    console.log(error.response)
});


        await axios.post("/login", {
          identify: this.identify,
          password: this.password
        });


        logIn();
        this.$store.dispatch("loadUser");
        this.$router.push({ name: "Dashboard" });
      } catch (error) {
        this.errors = error.response && error.response.data.errors;


      }
      this.loading = false;



    }
  }
};
</script>
