<template>
     <div class="  mb-4 container mt-5">
<div class="row">

<div class="col-md-12 col-sm-12">
    <a @click="$router.go(-1)" style="cursor:pointer" class="text-dark"><i class="fa fa-arrow-left  mb-3 fa-1x"></i></a>

       <div class="card w-100 mb-4 ">
                            <div class="card-body">

<p class="text-center font-weight-bold text-muted mb-0">Recent Ads</p>

      <span v-for="(recent,index) in recents.data" :key="index" v-bind="recent">

    <div class="links">



 <a @click="directTo(recent.id)" >

        <h3 class="main-color">{{recent.title}} </h3>
        <sup v-if="recent.confirmed==0" class="badge badge-dark">Draft</sup>
        <sup v-if="recent.confirmed==1" class="badge badge-success">Active</sup>
        <sup v-if="recent.confirmed==2" class="badge badge-danger">Pending</sup>



        <p>{{recent.Description}}</p>
            <span class="badge badge-info pt-2 pb-2 pr-2 pl-2" style="border-radius:20px">rooms : {{recent.rooms}} </span>
            <span class="badge badge-info pt-2 pb-2 pr-2 pl-2" style="border-radius:20px">floors : {{recent.floors}} </span>
            <span class="badge badge-info pt-2 pb-2 pr-2 pl-2" style="border-radius:20px">price : {{recent.price}} </span>
            <small class="d-block">{{recent.added_at}}</small>
       </a>



    </div>

 <hr>
      </span>

       </div>
       <div class="card-footer" ><pagination :data="recents" @pagination-change-page="detailsTender" ></pagination></div>


 </div>
</div>
</div>
                            </div>
</template>


<script>
import recent from '../v-dash/recent.vue';
import Listproject from './listproject.vue';
export default {
  components: { recent, Listproject },

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
        directTo(id){

 this.$router.push({ path: `/myads/details/${id}`});
        },

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


            axios.post(`/api/Ads/new`,data).then(response=>{
            if(200===response.status){
                this.recents = response.data.data;
                this.form.title =" "
                this.form.Emirates =" "
                this.form.desc =" "
                this.form.villa =" "
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
        padding: 20px;
    }
    .links:hover{
        background: #eee;
        cursor:pointer;
        width: 100%;
    }
</style>
