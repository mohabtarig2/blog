<template>
  <div>


    <title-tender v-for="(tender,index) in tenders" :key="index" v-bind="tender"></title-tender>



    <div class="container">
      <div class="row">
        <div class="col-md-7">

          <stages v-for="(tender,index) in tenders" :key="index" v-bind="tender"></stages>

          <div class="card mt-2">

              <div class="list-group-item h5 card-header">About The Project </div>

                <aboutTender class="" v-for="(tender,index) in tenders" :key="index" v-bind="tender"></aboutTender>


          </div>

          <div class="card mt-2">
            <ul class="list-group list-group-flush">
              <li class="list-group-item h5">
                Offers
                <small class="text-muted"  v-for="(tender,index) in Myoffers" :key="index" v-bind="tender">({{tender.AllOffers}})</small>
              </li>


            </ul>


 <span v-for="(tender,index) in Myoffers" :key="index" v-bind="tender">
 <span v-if="MyofferIsset==1" >

<div class="container">
    <span v-for="comment,index in tender.comments" :key="index">

        <li class="list-group-item" >


        <span  class="h5 text-primary font-weight-bold">{{comment.user.name}}</span>
        <small class="text-muted d-block">{{comment.Commented_at}}</small>

    </li>
    <li class="list-group-item mb-2">

 {{comment.comment}}
  <div class="files">
<table class="table table-striped">
  <thead>
          <tr>

      <th scope="col"> Design {{comment.design}}</th>
      <th scope="col"> Supervisor {{comment.Supervisor}}</th>

    </tr>
    <tr>

     <th scope="col"><span class="main-color">Total Area Build </span> {{comment.TotalAreaBuild}}</th>
      <th scope="col">Budget {{comment.budget}} AED</th>

    </tr>

  </thead>

  <tbody>
    <tr>


      <td >


<span v-for="imgs,index in comment.ImageComments" :key="index" >


    <img :src="imgs.path" width="100" >
<a :href="imgs.path" download="download" >

<i class="fa fa-download text-dark mr-2 "></i>
    </a>






     </span>
    <!-- -->
      </td>

    </tr>

  </tbody>
</table>
  </div>

    </li>

    </span>
</div>

    </span>
     </span>


    <span v-if="MyofferIsset==0">
         <form @submit="formSubmit" enctype="multipart/form-data">

                <div class="row container  mt-5 ">
                <div class="col-md-6 form-group col-sm-12">
 <div class="container"> Desgin</div>
                <input class="form-control" placeholder="design" type="number" v-model="design" :class="[{'is-invalid': errorFor('design')}]">

                   <div class="invalid-feedback"
          v-for="(error, index) in this.errorFor('design')"
          :key="'design' + index"
        >{{ error }}</div>

                </div>

 <div class="col-md-6 form-group col-sm-12">
<div class="container"> Supervisor</div>



                <input class="form-control" type="number" v-model="Supervisor" placeholder="Supervisor" :class="[{'is-invalid': errorFor('Supervisor')}]">
 <div class="invalid-feedback"
          v-for="(error, index) in this.errorFor('Supervisor')"
          :key="'Supervisor' + index"
        >{{ error }}</div>

              </div>
            </div>
              <div class="form-group container">
                    <div class="container">Your Offer </div>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Offer" v-model="notes" :class="[{'is-invalid': errorFor('notes')}]">
                 </textarea>

                   <div class="invalid-feedback"

          v-for="(error, index) in this.errorFor('notes')"
          :key="'notes' + index"
        >{{ error }}</div>

            </div>



              <div class="form-group container mt-2">
                <div class="container">item Not include </div>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea2"
                  rows="3"
                  placeholder="(wall , hvac ...)"
               v-model="item" :class="[{'is-invalid': errorFor('item')}]"></textarea>

                <div class="invalid-feedback"
          v-for="(error, index) in this.errorFor('item')"
          :key="'item' + index"
        >{{ error }}</div>

              </div>


            <div class="row container  mt-5 ">
                <div class="col-md-6 form-group col-sm-12">
 <div class="container"> Total Area Build</div>
                <input class="form-control" placeholder="total Area Build" type="number" v-model="tab" :class="[{'is-invalid': errorFor('tab')}]">

                   <div class="invalid-feedback"
          v-for="(error, index) in this.errorFor('tab')"
          :key="'tab' + index"
        >{{ error }}</div>

                </div>

 <div class="col-md-6 form-group col-sm-12">
<div class="container"> Budget</div>



                <input class="form-control" type="number" v-model="budget" placeholder="budget" :class="[{'is-invalid': errorFor('budget')}]">
                 <div class="invalid-feedback" v-for="(error, index) in this.errorFor('budget')" :key="'budget' + index"  >{{ error }}</div>

              </div>
            </div>


         <div class="container"> Add Some Photos </div>
              <div class="form-group ">
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

                <div class="container">


                            <ul>
                            <li><small>Do not use external means of communication</small></li>
                            <li><small>Do not post external links</small></li>
                            </ul>
                    <button class="btn btn-bus d-block mx-auto btn-lg btn-block  ml-3  mb-5" :disabled="btntender">

                        Add Your Tender

                        </button>




                </div>

            </form>
    </span>











<div class="modal fade success-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <span class=" text-success"><i class="fa fa-check" aria-hidden="true"></i> {{success}}</span>
    </div>
  </div>
</div>
          </div>
        </div>


        <div class="col-md-5">
          <partsconsl v-for="(tender,index) in tenders" :key="index" v-bind="tender"></partsconsl>
        </div>


      </div>
    </div>
  </div>
</template>




<script>

import { mapState, mapGetters } from "vuex";

import AboutTender from "../tenders/aboutTender.vue";
import OfferTender from "../tenders/offerTender.vue";
import Partsconsl from "../tenders/partsconsl.vue";
import Stages from "../tenders/stages.vue";
import titleTender from "../tenders/titleTender.vue";
import ValidationErrors from "../shared/components/ValidationErrors.vue";
import validationErrors from "../shared/mixins/validationErrors";
export default {
  components: { titleTender, Stages, AboutTender, Partsconsl, OfferTender ,ValidationErrors},
  mixins:[validationErrors],

  data() {
    return {
        tender_id :this.$route.params.id,
      isDragging:false,

       files:[],
       images:[],
       tenders:null,


       myoffer :{
          text:null
      },
       FileNotAllowd:'',
         errors: null,
      status: null,
        notes: null,
        btntender:false,
        item: null,
        budget: null,
        design:null,
        Supervisor:null,
        id:this.$route.params.id,
        show:'d-block',
        isset:null,
        MyofferIsset:null,
        success:null,

      file:"",
      title: null,
      CommentTender: null,
      tab:null,
      count: null,
        Myoffers:[],
output:null,
statusError:null,
    };
  },


  methods: {


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

      initializedListner(){
          Echo.private(`newComment.${this.id}`)
          .listen('NewComment',(e)=>{
              console.log(e);
              this.Myoffers.unshift(e.myoffer);
              console.log('lisiten To new Comment');
          })
      },
      getOffer(){
            axios
      .get(`/mytenders/MyOffer/${this.$route.params.id}`)
      .then(res=>{
        this.Myoffers= res.data;
        this.show='none';

        this.initializedListner();


      });
      },
    onChange(e) {
      this.file = e.target.files[0];
    },

    formSubmit(e) {
      e.preventDefault();
      this.loading = true;
      this.errors = null;


      let datas = new FormData();
      this.files.forEach(file =>{
            datas.append('images[]',file,file.name);

        })

this.btntender=true;
      datas.append("item", this.item);
      datas.append("notes", this.notes);
      datas.append("budget", this.budget);
      datas.append("Supervisor", this.Supervisor);
      datas.append("design", this.design);
      datas.append("tab", this.tab);
      datas.append("tender_id", this.id);



          axios.post("/offer_consulte", datas)
            .then(response =>{

              this.Myoffers.unshift(response.data);
              this.MyofferIsset=1


            }).catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
            }
            this.status=error.response.status

            }) .then(() => ((this.loading = false),(this.btntender=false)));
    },
    errorFor(field) {
      return this.hasErrors && this.errors[field] ? this.errors[field] : null;
    },


  },



  created() {
  axios
      .get(`/mytenders/ConslTender/${this.$route.params.id}`)
      .then((response) => (this.tenders = response.data));

this.getOffer();

  axios
      .get(`/mytenders/MyofferIsset/${this.$route.params.id}`)
      .then((response) => {
        this.MyofferIsset= response.data;
      });






  },
  computed:{
    hasErrors() {
        return 422 === this.status && this.errors !== null;
    },

  },

}
</script>


<style type="text/css">
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


.overlay {
  position: fixed; /* Sit on top of the page content */ /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color:white; /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
.spinner-border {
        display: block;
    position: absolute;
    left: 50%;
    top: 50%;
}
.is-invalid{
border-color: #b22222;
background-image: none;
}
/* generated by https://loading.io/ */
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
<style scoped>
.idownload{
    position: relative;
}

 .overlay{
       position: absolute  ; /* Sit on top of the page content */
        width: 100%; /* Full width (cover the whole page) */
        height: 100%;/* Full height (cover the whole page) */
        top: 1;
        left: 0;
        bottom: 0;
        right: 0;

        background-color: rgba(0,0,0,0.5); /* Black background with opacity */
        z-index: 1;

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


<style scoped>
.lb-grid{position:relative;display:block}
.lb-item{position:absolute;background-position:50%;background-repeat:no-repeat;background-size:cover;border-top:2px solid #fff;border-right:2px solid #fff;cursor:pointer}
.lb-grid-1 .lb-item{width:100%;height:100%}
.lb-grid-2 .lb-item,.lb-grid-3 .lb-item,.lb-grid-4 .lb-item,.lb-grid-5 .lb-item{width:50%}.lb-grid-2 .lb-item,.lb-grid-3 .lb-item:first-child,
.lb-grid-4 .lb-item:first-child{height:100%}.lb-grid-3 .lb-item:nth-child(2),
.lb-grid-3 .lb-item:nth-child(3),.lb-grid-5 .lb-item:first-child,
.lb-grid-5 .lb-item:nth-child(2){height:100%}.lb-grid-2 .lb-item:nth-child(2),
.lb-grid-3 .lb-item:nth-child(2),.lb-grid-3 .lb-item:nth-child(3),
.lb-grid-4 .lb-item:nth-child(2),.lb-grid-4 .lb-item:nth-child(3),
.lb-grid-4 .lb-item:nth-child(4),.lb-grid-5 .lb-item:nth-child(3),
.lb-grid-5 .lb-item:nth-child(4),.lb-grid-5 .lb-item:nth-child(5),
.lb-item:last-child{left:auto;right:0;border-right:0}
.lb-grid-3 .lb-item:nth-child(3),.lb-grid-4 .lb-item:nth-child(4),.lb-grid-5 .lb-item:nth-child(2),
.lb-grid-5 .lb-item:nth-child(5){bottom:0;top:auto}.lb-grid-4 .lb-item:nth-child(3),
.lb-grid-5 .lb-item:nth-child(4){top:33.333333333333336%}.lb-grid-4 .lb-item:nth-child(2),
.lb-grid-4 .lb-item:nth-child(3),.lb-grid-4 .lb-item:nth-child(4),.lb-grid-5 .lb-item:nth-child(3),
.lb-grid-5 .lb-item:nth-child(4),.lb-grid-5 .lb-item:nth-child(5){height:33.333333333333336%}
.lb-more{position:absolute;top:0;left:0;right:0;bottom:0;text-align:center;color:#fff;
font-size:3rem;background-color:rgba(0,0,0,.4)}
.lb-more:before{display:inline-block;content:"";vertical-align:middle;height:100%}
.lb-modal{transition:opacity .2s ease;position:fixed;z-index:99999;top:0;left:0;bottom:0;right:0;width:100%;min-height:100%;height:100vh;background-color:rgba(0,0,0,.8);display:block;-webkit-user-select:none;-moz-user-select:-moz-none;-o-user-select:none;-ms-user-select:none;user-select:none}.lb-modal-close{position:absolute;right:20px;top:20px;color:#fff}.lb-modal-next,.lb-modal-prev{position:absolute;top:50%;left:20px;margin-top:-25px;z-index:999;cursor:pointer;color:#fff;background-color:transparent;border:none}.lb-modal-next{left:auto;right:20px}.lb-modal-img{position:absolute;top:10px;left:70px;right:70px;bottom:10px;text-align:center}
.lb-modal-img:before{display:inline-block;content:"";vertical-align:middle;height:100%}
.lb-modal-img img{max-width:100%;max-height:100%;vertical-align:middle;-o-object-fit:contain;object-fit:contain}
.lb-modal-img .spinner{width:150px;position:absolute;margin-left:-75px;top:50%;left:50%;z-index:1}
</style>
