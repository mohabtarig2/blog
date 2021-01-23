<template>
     <div class="card w-100 mb-4">
                            <div class="card-body">

                                <p class="text-center font-weight-bold text-muted mb-0">New Offers</p>
                                <form @submit.prevent="submit" enctype="multipart/form-data">
    <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" v-model="form.title" name="title" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" :class="[{'is-invalid':this.errorFor('title')}]">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Photo</label>
    <input type="file" @change="newPhoto($event)" class="form-control" id="photo" name="photo">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Desription</label>
    <textarea class="form-control" name="desc"  v-model="form.desc" id="exampleFormControlTextarea1" rows="4" :class="[{'is-invalid':this.errorFor('desc')}]"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Type Of Villa</label>
    <select  class="form-control" id="exampleFormControlSelect2" name="villa" v-model="form.villa" :class="[{'is-invalid':this.errorFor('villa')}]">
      <option value="1">Modern</option>
      <option value="2">Classic</option>

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Emirates</label>
    <select  class="form-control" id="exampleFormControlSelect2" name="Emirates" v-model="form.Emirates" :class="[{'is-invalid':this.errorFor('Emirates')}]">
      <option value="1">Dubai</option>
      <option value="2">Abu Dabhi</option>
      <option value="3">Ajman</option>
      <option value="4">Sharja</option>
      <option value="5">Um AlQwin</option>
      <option value="5">Ras Alkhima</option>
      <option value="6">Fujira</option>

    </select>
  </div>
   <div class="form-group">
  <button type="submit" class="form-control btn btn-secondary" :disabled="loading">
<span :class="ret"></span>
      Post</button>
   </div>


</form>

                            </div>
                            </div>
</template>


<script>
export default {
    data () {
            return {
            form:{
                title: '',
                desc: '',
                Emirates: '',
                villa: '',


              },
              photo:'',
              loading:false,
              ret:null,
              status:null,
              errors:null,
            }

        },
    methods:{
    newPhoto(event) {
       let files = event.target.files;
       if (files.length) this.photo = files[0];

    },
        submit()
        {
        this.loading=true;
        this.ret='spinner-grow text-light';

    let data = new FormData();
        data.append('file', this.photo);
        data.append('title', this.form.title);
        data.append('Emirates', this.form.Emirates);
        data.append('desc', this.form.desc);
        data.append('villa', this.form.villa);

            axios.put(`/api/Ads/new`,data).then(response=>{
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
},computed: {
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
}
</script>
