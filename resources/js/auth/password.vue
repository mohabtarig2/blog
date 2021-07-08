<template>




<div class="d-flex w-50 m-auto align-items-center">



<div class="card card-body mt-5">
    <div class="alert alert-danger alert-dismissible fade show" role="alert" :class="match">
  <strong>new  password and  </strong> confirm Password not match
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <h1 class="text-center">Change Your Password</h1>
    <form >
        <div class="form-group">
            <label for="email">Current Password</label>
            <input type="password"
             name="email"
             placeholder="Enter your Email"
              class="form-control"
              v-model="Current_Password"
             :class="[{'is-invalid': errorFor('Current_Password')}]"
          />
          <v-errors :errors="errorFor('Current_Password')"></v-errors>
        </div>
        <div class="form-group">
            <label for="password">New password</label>
            <input type="password"
             name="password"
             placeholder="Enter your password"
              class="form-control"
              v-model="New_password"
             :class="[{'is-invalid': errorFor('New_password')}]"
          />
          <v-errors :errors="errorFor('New_password')"></v-errors>
        </div>

        <div class="form-group">
            <label for="password">confirm password</label>
            <input type="password"
             name="password"
             placeholder="Enter your password"
              class="form-control"
              v-model="confirm_password"
             :class="[{'is-invalid': errorFor('confirm_password')}]"
          />
          <v-errors :errors="errorFor('identify')"></v-errors>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block" :disabled="loading" @click.prevent="save">save</button>
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
      Current_Password: null,
      confirm_password:null,
      New_password:null,
      loading: false,
      match:"d-none"

    };

  },
   methods: {
    async save() {
      this.loading = true;
      this.errors = null;

try {
const user = (await axios.get('/user')).data;

                axios.post("api/user/ChangePassword", {
          password: this.Current_Password,
          cpassword: this.confirm_password,
          npassword: this.New_password,
          userid :   user.id
        });


      this.loading = false;

}catch (error) {
        this.errors = error.response && error.response.data.errors;
      }


  }
}
}
</script>


