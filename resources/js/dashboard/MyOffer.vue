<template>
     <div class="  mb-4 container mt-5">
<div class="row">
<div class="col-md-6 col-sm-12">
                            <div class="card container">

                                <p class="text-center font-weight-bold text-muted mb-0 mt-5">New Offers</p>
                                <form @submit.prevent="submit" enctype="multipart/form-data">
<div :class="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    You posted successfuly
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>

    <input type="text" v-model="form.title" name="title" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" :class="[{'is-invalid':this.errorFor('title')}]">
                 <div class="invalid-feedback" v-for="(error, index) in this.errorFor('title')" :key="'title' + index" >{{ error }}</div>

  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Desription</label>
    <textarea class="form-control" name="desc"  v-model="form.desc" id="exampleFormControlTextarea1" rows="4" :class="[{'is-invalid':this.errorFor('desc')}]"></textarea>
                     <div class="invalid-feedback" v-for="(error, index) in this.errorFor('desc')" :key="'desc' + index" >{{ error }}</div>


  </div>
  <div class="form-group row">
 <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1">bed rooms</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="villa" v-model="form.rooms" :class="[{'is-invalid':this.errorFor('rooms')}]">
      <option value="1">one</option>
      <option value="2">two</option>
      <option value="3">three</option>
      <option value="4">Four</option>
      <option value="5">Five</option>
      <option value="6">Six</option>
      <option value="7">Seven</option>
      <option value="8">Eight</option>

    </select>

           <div class="invalid-feedback" v-for="(error, index) in this.errorFor('rooms')" :key="'rooms' + index" >{{ error }}</div>
      </div>

      <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1">Type Of Villa</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="villa" v-model="form.villa" :class="[{'is-invalid':this.errorFor('villa')}]">
      <option value="1">Modern</option>
      <option value="2">Classic</option>

    </select>

           <div class="invalid-feedback" v-for="(error, index) in this.errorFor('villa')" :key="'villa' + index" >{{ error }}</div>
      </div>


      <div class="col-md-4 col-sm-12">
    <label for="exampleFormControlSelect1">Floors</label>
    <select  class="form-control" id="exampleFormControlSelect1" name="floors" v-model="form.floors" :class="[{'is-invalid':this.errorFor('floors')}]">
      <option value="1">one</option>
      <option value="2">Two</option>
      <option value="3">Three</option>

    </select>

           <div class="invalid-feedback" v-for="(error, index) in this.errorFor('floors')" :key="'floors' + index" >{{ error }}</div>
      </div>


  </div>

  <div class="form-group row">

    <div class="col-md-6 col-sm-12">
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
     <div class="invalid-feedback" v-for="(error, index) in this.errorFor('Emirates')" :key="'Emirates' + index" >{{ error }}</div>
    </div>
     <div class="col-md-6 col-sm-12">
    <label for="exampleFormControlSelect2">price</label>
    <select  class="form-control"  name="price" v-model="form.price" :class="[{'is-invalid':this.errorFor('price')}]">
      <option value="5000">5000 AED</option>
      <option value="6000">6000 AED</option>
      <option value="7000">7000 AED</option>
      <option value="8000">8000 AED</option>
      <option value="9000">9000 AED</option>
      <option value="10,000">10,000 AED</option>
      <option value="11,000">11,000 AED</option>
      <option value="12,000">12,000 AED</option>
      <option value="13,000">13,000 AED</option>
      <option value="14,000">14,000 AED</option>
      <option value="15,000">15,000 AED</option>
      <option value="16,000">16,000 AED</option>
      <option value="17,000">17,000 AED</option>
      <option value="18,000">18,000 AED</option>
      <option value="19,000">19,000 AED</option>
      <option value="20,000">20,000 AED</option>


    </select>
     <div class="invalid-feedback" v-for="(error, index) in this.errorFor('price')" :key="'price' + index" >{{ error }}</div>
    </div>

  </div>

     <div class="form-group">


    <div class="container"> Add Some Photos </div>
              <div class="form-group ">
                <div class="image-preview" v-show="images.length">
            <div class="image-wrapper " v-for="(image,i) in images" :key="i">
                <span v-if="files[i].name!=null">





                    <span v-if="files[i]['type']==='image/jpeg' || files[i]['type']==='image/jpg' ">
                     <img :src="image" :alt='`image ${i}`' width="50"  >
                     <br>

                     </span>
                      <span v-else-if="files[i]['type']==='image/png'">
                     <img :src="image" :alt='`image ${i}`' width="50"  >
                     <br>

                     </span>






                    {{files[i].type}}

                   <sup class="text-muted " v-if="files[i].size"> {{files[i].size}} KB </sup>
                    <div class="container row " >
                        <div class="col-8">
                        <div class="progress">
  <div class="progress-bar " :class="progressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

                        </div>
                        </div>
                        <div class="col-4">
                            <a class="btn btn-light" @click.prevent='removeImage(i)' ><i class="fa fa-close"> </i> </a>
                        </div>



</div>

                </span>
            </div>
        </div>



 <div class="form-group mt-3 mb-3 ml-3 mr-3">
   <!-- <label for="exampleFormControlInput1">Photo</label>
    <input type="file" @change="newPhoto($event)" class="form-control" id="photo" name="photo">
    !-->


        <div class="uploader-container mb-2"
          @dragenter.prevent="OnDragEnter"
         @dragleave.prevent="OnDragLeave"
         @dragover.prevent


         :class="{dragging:isDragging} "
         >
            <i class="fa fa-image" aria-hidden="true"></i>
            <p> Drag Or Drop </p>
            <div class="file-input">
                <label for="file">Choose file</label>
                <input type="file" name="file[]"   @change.prevent="onImageChanged" id="file" multiple >

        </div>

        </div>
        <strong v-if="FileNotAllowd" class="text-danger">{{FileNotAllowd}}</strong>



 </div>




              </div>
  </div>
   <div class="form-group">
  <button type="submit" class="btn-block mx-auto btn btn-bus" :disabled="/*!form.Emirates|!form.villa|!form.desc|!form.title|*/loading">
<span :class="ret"></span>
      {{Post}}</button>
   </div>


</form>

                            </div>
</div>
<div class="col-md-6 col-sm-12">
       <div class="card w-100 mb-4 ">
                            <div class="card-body">
                                <router-link :to="{name:'alloffers'}" class="float-right font-weight-bold">See all </router-link>

<p class="text-center font-weight-bold text-muted mb-0">Recent Ads</p>

      <span v-for="(recent,index) in recents.data" :key="index" v-bind="recent">

    <div>





<div class="links">

<a @click="directTo(recent.id)" >
        <h3 class="main-color">{{recent.title}}</h3>
             <sup v-if="recent.confirmed==0" class=" text-dark pt-2 pb-2 pr-2 pl-2"  style="border-radius:20px;font-size:10px">Draft</sup>
        <sup v-if="recent.confirmed==1" class=" text-success pt-2 pb-2 pr-2 pl-2"  style="border-radius:20px;">Active</sup>
        <sup v-if="recent.confirmed==2" class=" text-danger pt-2 pb-2 pr-2 pl-2"  style="border-radius:20px ; font-size:10px" >Pending</sup>





        <p>{{recent.Description.substr(0,100 )}}..

              </p>
              <span class="badge badge-custom pt-2 pb-2 pr-2 pl-2" style="border-radius:20px">rooms : {{recent.rooms}} </span>
            <span class="badge badge-custom pt-2 pb-2 pr-2 pl-2" style="border-radius:20px">floors : {{recent.floors}} </span>
            <span class="badge badge-custom pt-2 pb-2 pr-2 pl-2" style="border-radius:20px">price : {{recent.price}} </span>

        <small class="d-block">{{recent.added_at}}</small>


</a>
</div>

        <hr>

    </div>


      </span>
       </div>



 </div>
</div>
</div>
                            </div>
</template>


<script>
import recent from '../v-dash/recent.vue';
export default {
  components: { recent },

    data () {
            return {
            form:{
                title: '',
                desc: '',
                Emirates: '',
                villa: '',
                price:'',
                floors:'',
                rooms:'',


              },

              photo:'',
              loading:false,
              ret:null,
              status:null,
              errors:null,
              recents:null,
             successPost: false,
             alert:'d-none',
             isDragging:false,
             counter:0,
            files:[],
            images:[],
            FileNotAllowd:'',
            Post:'Post',
            }
    },
    created(){

        this.detailsTender();


    },
    methods:{

 detailsTender(page ){
          axios.get("/api/Ads?page="+page).then(response=>{
        this.recents = response.data;
        this.loading = false;
         })
         },
  addImage(file){

    function getFileExtension(filename){

    // get file extension
    const extension = filename.split('.').pop();
    return extension;
}

// passing the filename
const result1 = getFileExtension(file.name);
console.log(result1);



                if(!file.type.match('image.*')){
                   this.FileNotAllowd =`Not Allowd ${file.type} `;
                    return ;
                }

                this.files.push(file); //upload
                //preview of image
                const reader = new FileReader();
                reader.onload = (e)=>this.images.push(e.target.result)



                reader.readAsDataURL(file);
                 this.progressbar = "w-100";
                 this.FileNotAllowd ='';
            },
        onImageChanged(e){
               const files = e.target.files;
               Array.from(files).forEach(file => this.addImage(file))
            },
            OnDragEnter(){
                  this.isDragging = true;
                  this.counter++;

            },
            OnDragLeave(){
                  this.counter--;
                  if(this.counter <=0){
                      this.isDragging = false;
                  }

            },
            onDrop(e){
             this.isDragging = false;
               const files = e.dataTransfer.files;
               Array.from(files).forEach(file => this.addImage(file))
            },

            removeImage(i){
  let files = this.files;
  files.splice(i,1,'');
    console.log(files);



            },
                directTo(id){

 this.$router.push({ path: `/myads/details/${id}`});
        },
        async submit()
        {


        this.loading=true;
       // this.ret='spinner-grow text-light';


    let data = new FormData();



        //data.append('imageAds', this.photo);
     this.files.forEach((file) => {
        data.append("images[]", file, file.name);
      });


        data.append('title', this.form.title);
        data.append('Emirates', this.form.Emirates);
        data.append('desc', this.form.desc);
        data.append('villa', this.form.villa);
        data.append('price', this.form.price);
        data.append('floors', this.form.floors);
        data.append('rooms', this.form.rooms);


            axios.post(`/api/Ads/new`,data).then(response=>{
            if(200===response.status){
                this.recents = response.data.data;
                this.form.title =" "
                this.form.Emirates =" "
                this.form.desc =" "
                this.form.villa =" "
                this.form.price =" "
                this.form.floors =" "
                this.form.rooms =" "
                // let filelength =this.files.length
                //   let files = this.files;


                //      files.splice(0,this.files.length)
                //      this.files=" "


           this.alert="alert alert-success alert-dismissible"
            }


       })
       .catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
            }
            this.status=error.response.status
       })
       .then(()=>(this.loading=false,this.ret=" "));

    },
    errorFor(field){
        return this.hasErrors && this.errors[field] ? this.errors[field] :null;
    }
},computed: {
    hasErrors() {
        return 422 === this.status && this.errors !== null;
    },



    }
}
</script>
<style scoped>
.badge-custom{
    background: #cef2ef;
    color:#00998c;
}
.page-link {
    z-index: 2;
    color: #dc3545;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #dc3545 !important;
    border-color: #dc3545 !important;
}

</style>

<style lang="scss" scoped>
 .uploader-container{
      background: rgb(240,240,240);
    text-align: center;
    font-size: 22px;
    border: 3px dashed #a2a2a2;
    padding: 1rem 2rem;
    position: relative;
    color: #797979;
    &.dragging{
        background: #fff;
        color: #797979;
        border:3px dashed #1adf65;
        .file-input label{
            background: #909090;
            color:#fff;
        }
    }
    i{
            font-size: 2rem;
    margin-bottom: 1rem;
    }
    .file-input{
        width: 250px;
        margin: auto;
        height: 71px;
        position: relative;
        input,label{
                background: #fff;
                color: #0c66d6;
                padding: 0.5rem;
                position: absolute;
                margin-top: 10px;
                left: 0;
                top: 0;
                width: 100%;
                cursor: pointer;
                border-radius: 5px;
                box-shadow: 0px 1px 4px #797979;
        }
        input{
            opacity: 0;
            z-index: 2;

        }
        .image-preview{
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        margin-top: 4rem;
        .image-wrapper{
        display: flex;
        flex-direction: column;
        width: 30%;
        height: 190px;
        background: #fff;
        color: #000;
        justify-content: space-between;
        align-items: self-start;
        padding: 3px;
        margin-bottom: 2rem;
        box-shadow: 1px 0px 10px snow;
        }
        }
        img{
            width:100%;
            height:60%;
        }

    }

 }
</style>

<style  scoped>
    .links{
        cursor:pointer;
        padding: 10px;
    }
    .links:hover{
        background: #eee;
        cursor:pointer;
        width: 100%;
    }
</style>
