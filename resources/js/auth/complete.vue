


<template>
<div>

<div class="d-flex w-50 mx-auto align-items-center" >

<div class="card card-body mt-5">
    <form >
        <div class="form-group">
    <label for="exampleFormControlTextarea1  "><span class="font-weight-bold">About Us</span></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="complete.about"></textarea>
  </div>
  <div class="row">
             <div class="col-6  mt-3">
            <label for="manger_ar">Manger name <span class="text-muted"><small>arabic</small></span></label>
            <input type="text"
             name="manger_ar"
             placeholder="Enter your the name of manager"
              class="form-control"
              v-model="complete.manger_ar"
             :class="[{'is-invalid': errorFor('manger_ar')}]"
          />
          <v-errors :errors="errorFor('manger_ar')"></v-errors>
        </div>

        <div class="col-6  mt-3">
            <label for="manger_en">Manger name <span class="text-muted"><small>English</small></span></label>
            <input type="text"
             name="manger_en"
             placeholder="Enter your the name of manager"
              class="form-control"
              v-model="complete.manger_en"
             :class="[{'is-invalid': errorFor('manger_en')}]"
          />
          <v-errors :errors="errorFor('manger_en')"></v-errors>
        </div>

  </div>
  <div class="row">
        <div class="col-6  mt-3">
            <label for="email">Company name <span class="text-muted"><small>Arabic</small></span>
            </label>
            <input type="text"
             name="Company_ar"
             placeholder="Enter your MAnger Name"
              class="form-control"
              v-model="complete.Company_ar"
             :class="[{'is-invalid': errorFor('Company_ar')}]"
          />
          <v-errors :errors="errorFor('Company_ar')"></v-errors>
        </div>
        <div class="col-6  mt-3">
            <label for="Company_en">Company name <span class="text-muted"><small>English</small></span></label>
            <input type="Company_en"
             name="Company_en"
             placeholder="Enter your Company name "
              class="form-control"
              v-model="complete.Company_en"
             :class="[{'is-invalid': errorFor('Company_en')}]"
          />
          <v-errors :errors="errorFor('Company_en')"></v-errors>
        </div>

  </div>

  <div class="form-group mt-3">
            <label for="date_create">Date Create
            </label>
            <input type="date"
             name="date_create"

              class="form-control"
              v-model="complete.date_create"
             :class="[{'is-invalid': errorFor('date_create')}]"
          />
          <v-errors :errors="errorFor('date_create')"></v-errors>
          <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('date')"
          :key="'date' + index"
        >{{ error }}</div>
        </div>
        <div class="form-group mt-3">
            <label for="date">Phone Number
            </label>
            <input type="number"
            name="phone"
              class="form-control"
              v-model="complete.phone"

             :class="[{'is-invalid': this.errorFor('phone')}]"

          />
           <small >{{ error_phone}} </small>
          <v-errors :errors="errorFor('phone')"></v-errors>


        </div>
         <div class="form-group mt-3">
            <label for="date">emirates
            </label>
        <select class="form-control " v-model="complete.emirates">
  <option value="2">Duabi</option>
  <option value="2">Fujira</option>
  <option value="3">Ras Alkhima</option>
  <option value="4">um alqwain</option>
  <option value="5">sharja</option>
  <option value="6">ajman</option>
  <option value="7">Abudabhi</option>

</select>
         </div>



        <button type="submit" class="btn btn-success btn-lg btn-block mt-3" :disabled="loading" @click.prevent="continues"><b>Next </b> <i class="	fa fa-arrow-circle-o-right"></i></button>

 </form>
</div>
</div>

</div>
</template>

<script>
import { mapState, mapGetters } from "vuex";
import validationErrors from "../shared/mixins/validationErrors";
import navbar from './navbar.vue';


export default {
  components: { navbar },
    mixins:[validationErrors],

data() {
    return {
        complete:{
      about: null,
      phone: null,
      Company_ar:null,
      Company_en: null,
      manger_ar: null,
      manger_en: null,
      date_create: null,
      emirates: null,
        },
    loading : false,
    status:null,
    errors:null,
    error_phone : "",


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

 continues() {


     try {
       const response =axios.post("complete", this.complete);
       if (201 == response.status) {

          location.reload();

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
label {
    font-size:0.7rem;
    text-transform:uppercase;
    color: gray;
    font-weight: bolder;
}
.is-invalid{
border-color: #b22222;
background-image: none;
}
</style>

