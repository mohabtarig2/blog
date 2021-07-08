<template>
    <div class="row mt-4">
        <div class="col-7">




   <div class="card w-100 mb-4">

                            <div class="card-body">


<form @submit.prevent="submit" enctype="multipart/form-data">
   <div class="form-group bg-white">
   <!-- <label for="exampleFormControlInput1">Photo</label>
    <input type="file" @change="newPhoto($event)" class="form-control" id="photo" name="photo">
    !-->
    <h2 class="text-center">Construction Tenders</h2>
    <input class="form-control mb-2" type="text" placeholder="Title.."  v-model="title" :class="[{'is-invalid': errorFor('title')}]">
    <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('title')"
          :key="'title' + index"
        >{{ error }}</div>



    <textarea class="form-control mb-2" placeholder="About" rows="3" v-model="notes" :class="[{'is-invalid': errorFor('notes')}]"> </textarea>
      <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('notes')"
          :key="'notes' + index"
        >{{ error }}</div>


          <div class="form-group mt-3">
            <label for="date">emirates
            </label>
        <select class="form-control" v-model="emirates" :class="[{'is-invalid': errorFor('emirates')}]">
  <option value="2">Duabi</option>
  <option value="2">Fujira</option>
  <option value="3">Ras Alkhima</option>
  <option value="4">um alqwain</option>
  <option value="5">sharja</option>
  <option value="6">ajman</option>
  <option value="7">Abudabhi</option>

</select>


<div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('emirates')"
          :key="'emirates' + index"
        >{{ error }}</div>
         </div>

        <div class="uploader-container"
          @dragenter.prevent="OnDragEnter"
         @dragleave.prevent="OnDragLeave"
         @dragover.prevent

         :class="{dragging:isDragging}"
         >
            <i class="fa fa-image" aria-hidden="true"></i>
            <p> Drag Or Drop </p>
            <div class="file-input">
                <label for="file">Choose file</label>
                <input type="file" name="file[]"   @change.prevent="onImageChanged" id="file" multiple>
            </div>
        </div>
        <strong v-if="FileNotAllowd" class="text-danger">{{FileNotAllowd}}</strong>
        <div class="image-preview" v-show="images.length">
            <div class="image-wrapper " v-for="(image,i) in images" :key="i">
                <span v-if="files[i].name!=null">





                    <span v-if="files[i]['type']==='image/jpeg' || files[i]['type']==='image/jpg' ">
                     <img :src="image" :alt='`image ${i}`' width="50"  >
                     <br>

                     </span>


                          <span v-else-if=" files[i].type=='application/pdf'">
                    <i class="fa fa-file-pdf text-danger"></i>
                     </span>

                         <span v-else-if=" files[i].type=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'">
                    <i class="fa fa-file-csv text-success"></i>
                     </span>


                         <span v-else-if=" files[i].type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document'">
                    <i class="fa fa-file-word text-primary"></i>
                     </span>




                    {{files[i].type}}

                   <sup class="text-muted " v-if="files[i].size"> {{files[i].size}} KB </sup>
                    <div class="progress" >
  <div class="progress-bar " :class="progressbar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

</div>
<a class="btn btn-light" @click.prevent='removeImage(i)' ><i class="fa fa-close"> </i> Remove</a>
                </span>
            </div>
        </div>




         <button type="submit" class="form-control btn btn-secondary mt-3"
         :disabled='isDisabled'
          >Post</button>




  </div>


</form>

                            </div>
                            </div>
            <!-- /.card -->


        </div>
         <div class="col-5">
<conditions></conditions>
  </div>
    </div>
</template>



<script>

import conditions from './conditions.vue'
import ValidationErrors from '../shared/components/ValidationErrors.vue';
import validationErrors from "../shared/mixins/validationErrors";

export default {
  components: { conditions ,ValidationErrors},
  mixins:[validationErrors],

    data () {
            return {

             title:'',
              notes:'',
              terms: false,
              afterSend:false,
              emirates:null,
              photo:'',
              loading:false,
              ret:null,
              status:null,
              errors:null,
             successPost: false,
             alert:'d-none',
             isDragging:false,
             counter:0,
             files:[],
             images:[],
             FileNotAllowd:'',
             message :'YouR  Tender Is successfuly Upload'


            }
    },


    methods:{

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

            addImage(file){

    function getFileExtension(filename){

    // get file extension
    const extension = filename.split('.').pop();
    return extension;
}

// passing the filename
const result1 = getFileExtension(file.name);
console.log(result1);



                if(!file.type.match('image.*|application.*') && result1 !="dwg"){
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
            removeImage(i){
  let files = this.files;
  files.splice(i,1,'');
    console.log(files);



            },

        async submit()
        {

this.terms = false;
this.afterSend=true;
 this.loading=true;
        this.ret='spinner-grow text-light';


    let data = new FormData();


        //data.append('imageAds', this.photo);
        this.files.forEach(file =>{
            data.append('images[]',file,file.name);


        })


        data.append('title', this.title);
        data.append('emirates', this.emirates);
        data.append('notes', this.notes);



            axios.post(`tconstr`,data).then(response=>{

           this.status=response.data
           let id = this.status;

          this.$router.push({name: 'consrDetails', params: {id}})
            localStorage.setItem('messageTender',JSON.stringify(this.message));

        this.terms =true;

       })
       .catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
            }
            this.status=error.response.status
       })
       .then(()=>(this.loading=false,this.ret=false,this.alert="alert alert-success alert-dismissible"));

    },
    errorFor(field){
        return this.hasErrors && this.errors[field] ? this.errors[field] :null;
    },
    },
computed: {
    hasErrors() {
        return 422 === this.status && this.errors !== null;
    },
   /* isDisabled: function(){

    	return !this.terms;
    },*/

}

}
</script>

<style lang="scss">
  .dropbox {
    outline: 2px dashed grey; /* the dash box */
    outline-offset: -10px;
    background: lightcyan;
    color: dimgray;
    padding: 10px 10px;
    min-height: 200px; /* minimum height */
    position: relative;
    cursor: pointer;
  }

  .input-file {
    opacity: 0; /* invisible but it's there! */
    width: 100%;
    height: 200px;
    position: absolute;
    cursor: pointer;
  }

  .dropbox:hover {
    background: lightblue; /* when mouse over to the drop zone, change color */
  }

  .dropbox p {
    font-size: 1.2em;
    text-align: center;
    padding: 50px 0;
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
        border:3px dashed #0c66d6;
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

}

