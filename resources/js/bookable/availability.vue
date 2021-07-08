<template>
    <div>
    <h6 class="text-uppercase text-secondary font-weight-bold">Check availability</h6>
    <span v-if="HasAvailbilty" class="text-success"> (available) </span>
    <span v-if="noAvailbilty" class="text-danger"> (Not available) </span>
    <div class="form-row">
        <div class="form-group col-md-6">
      <label for="from">Form</label>
      <input type="text" :name="from"

      placeholder="Start Date"
      v-model="from"
      @keyup.enter="check"
      :class="['form-control-sm form-control',{'is-invalid':this.errorFor('from')}]"
      />
     <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('from')"
          :key="'from' + index"
        >{{ error }}</div>
        </div>

        <div class="form-group col-md-6">
      <label for="to">To</label>
      <input type="text" v-model="to" name="to"

      placeholder="end Date"
      @keyup.enter="check"
    :class="['form-control-sm form-control',{'is-invalid':this.errorFor('to')}]"

      />
      <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('to')"
          :key="'to' + index"
        >{{ error }}</div>
        </div>

        </div>
        <button  class="form-control btn-secondary btn-block" @click="check" :disabled="loading">
        <div :class="ret" role="status">check</div>
         </button>

    </div>



    </div>
</template>
<script>
export default {
    data(){
        return{
            from:"2019",
            to:null,
            loading:false,
            status:null,
            errors:null,
            ret:null,


        }

    },
    methods: {
          check(){
        this.loading=true;
        this.ret='spinner-grow text-light'
        this.errors=null;
        axios.get(`/api/bookables/${this.$route.params.id}/availabilty?from=${this.from}&to=${this.to}`).then(response=>{
           this.status=response.status
       })
       .catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
            }
            this.status=error.response.status
       })
       .then(()=>(this.loading=false,this.ret=false));

    },
    errorFor(field){
        return this.hasErrors && this.errors[field] ? this.errors[field] :null;
    }
},
    computed: {
    hasErrors() {
        return 422 === this.status && this.errors !== null;
    },
    HasAvailbilty(){
        return 200 === this.status;
    },
    noAvailbilty(){
        return 404 === this.status;
    },
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
