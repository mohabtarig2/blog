

<template>
<div class="container mt-5">
<div class="row">
   <div class="col-md-4 col-sm-12">
<div class="card" >

  <ul class="list-group list-group-flush">
    <li class="list-group-item mt-3"><a class="mr-4 font-weight-bold text-dark"><i class="fa fa-user-edit"></i><span class="pr-5"> Edit Profile</span></a></li>
        <li class="list-group-item mt-3"><a class="mr-4 font-weight-bold text-dark"><i class="fa fa-unlock-alt"></i><span class="pr-5"> Change password</span></a></li>

  </ul>
</div>
   </div>

    <div class="col-md-8 col-sm-12">
<div  >
<div id="editPostModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form enctype="multipart/form-data">

            <div class="modal-header">
              <h4 class="modal-title text-center">Edit Profile</h4>
              <div class="">
                  <br>profile
                   <input type="file">
                   </div>


              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                 <label> Company name <sup class="text-muted">(arabic)</sup></label>
                <input type="text" class="form-control" required v-model="PostToEdit.company_ar" :class="[{'is-invalid': errorFor('company_ar')}]">
                   <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('company_ar')"
          :key="'company_ar' + index"
        >{{ error }}</div>
              </div>
                <div class="form-group">
                 <label> Company name <sup class="text-muted">(english)</sup></label>
                <input type="text" class="form-control" required v-model="PostToEdit.company_en" :class="[{'is-invalid': errorFor('company_en')}]">
                   <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('company_en')"
          :key="'company_en' + index"
        >{{ error }}</div>
              </div>
                 <div class="form-group">
                 <label> manager name <sup class="text-muted">(english)</sup></label>
                <input type="text" class="form-control" required v-model="PostToEdit.manager_en" :class="[{'is-invalid': errorFor('manager_en')}]">
                   <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('manager_en')"
          :key="'manager_en' + index"
        >{{ error }}</div>
              </div>
                 <div class="form-group">
                 <label> manager name <sup class="text-muted">(arabic)</sup></label>
                <input type="text" class="form-control" required v-model="PostToEdit.manager_ar" :class="[{'is-invalid': errorFor('manager_ar')}]">
                   <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('manager_ar')"
          :key="'manager_ar' + index"
        >{{ error }}</div>
              </div>
              <div class="form-group">
                <label>body</label>
                <textarea name cols="30" class="form-control" rows="5" v-model="PostToEdit.about_us"
                :class="[{'is-invalid': errorFor('about_us')}]">></textarea>
                <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('about_us')"
          :key="'about_us' + index"
        >{{ error }}</div>
              </div>

            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-bus d-block mx-auto btn-lg btn-block" @click.prevent="savedata" value="save" :disabled="disabled">
              <input type="button" class="btn btn-default btn-block" data-dismiss="modal" value="Cancel" />


            </div>
          </form>
        </div>
      </div>
    </div>

<div class="d-flex w-100 mx-auto align-items-center" >

<div class="card card-body" v-for="file,index in data" :key="index" style="font-size:20px">
    <a href="#editPostModal" class="edit text-muted text-right d-block" data-toggle="modal" >
        <i class="fa fa-edit"
                  data-toggle="tooltip"
                  title="Edit"
                  @click="editPost(file,$event)"></i>

     </a>
    <h1 class="text-center font-weight-bold " style="font-size:2rem">Edit Profile </h1>

<div class="alert alert-success" v-if="success!=null">{{success}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="card" >

  <ul class="list-group list-group-flush">

      <div>Company name <sup> (arabic)</sup> </div>
    <li class="list-group-item mt-3"><a class="mr-4 font-weight-bold text-dark"><span class="pr-5"> {{file.company_ar}}</span></a></li>
      <div>Company name <sup> (english)</sup> </div>
    <li class="list-group-item mt-3"><a class="mr-4 font-weight-bold text-dark"><span class="pr-5"> {{file.company_en}}</span></a></li>
      <div>manager name <sup> (arabic)</sup> </div>
    <li class="list-group-item mt-3"><a class="mr-4 font-weight-bold text-dark"><span class="pr-5"> {{file.manager_en}}</span></a></li>
      <div>manager name <sup> (english)</sup> </div>
    <li class="list-group-item mt-3"><a class="mr-4 font-weight-bold text-dark"><span class="pr-5"> {{file.manager_ar}}</span></a></li>
<div>About Us </div>
    <li class="list-group-item mt-3"><a class="mr-4  text-dark"><span class="pr-5"> {{file.about_us}}</span></a></li>


  </ul>
</div>


</div>
</div>

</div>
    </div>

</div>

</div>
</template>

<script>
import { mapState, mapGetters } from "vuex";
import ValidationErrors from '../shared/components/ValidationErrors.vue';
import validationErrors from "../shared/mixins/validationErrors";



export default {
  components: {  ValidationErrors },
    mixins:[validationErrors],

data() {

    return {
      company_ar: null,
      password:null,
      loading: false,
      success:null,
      errors:null,
       status:null,
       disabled:false,
      data:'',
      file:{
          about_us:null,
          company_ar:null,
          company_en:null,
          manager_en:null,
          manager_ar:null,
          phone:null,
      }

    };

  },
  computed: {
        hasErrors() {
        return 422 === this.status && this.errors !== null;
    },
    ...mapState({

      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({

    }),
  PostToEdit() {
      return this.$store.getters.PostToEdit;
    },
  },

  created(){
this.getdata();
  },

   methods: {
        editPost(data) {
      this.$store.commit("EditPost",data);
    },

  getdata(){


     axios.get(`gatdatacompany`).then(response=>{
        this.data = response.data;

});
  },

    savedata(){


 this.disabled=true;
   axios.post(`savedatacompany`,this.PostToEdit).then(response=>{




        $("#editPostModal").modal("hide");
            $(".modal-backdrop").css("display", "none");
 this.success = response.data.success;





        //location.reload();


}).catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
            }
            this.status=error.response.status
       });
  },
  errorFor(field){
        return this.hasErrors && this.errors[field] ? this.errors[field] :null;
    },
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
