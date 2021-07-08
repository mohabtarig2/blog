<template>
  <div>

    <div class="alert alert-success" v-if="messageTender!=null">{{messageTender}}</div>
    <div class="alert alert-success" v-if="messageUpdateTender!=null">{{messageUpdateTender}}</div>



    <span v-for="(tender,index0) in tenders" :key="index0" >

      <div class="card mb-5">

        <ul class="list-group list-group-flush">
          <li class="list-group-item container">
            <span class="badge badge-success pt-2 pb-2 pl-2 pr-2" v-if="tender.status==1">open</span>
            <span
              class="badge badge-warning pt-2 pb-2 pl-2 pr-2"
              v-if="tender.status==0"
            >under process</span>
            <span class="badge badge-dark pt-2 pb-2 pl-2 pr-2" v-if="tender.status==2">closed</span>

            <a class="h1 text-dark">{{tender.title}}</a>

            <div class="d-block mt-3">
              <span class="fa fa-clock-o text-muted">{{tender.added_at}}</span>
              <span class="fa fa-map text-muted" v-if="tender.emirates==2">Fujira</span>
              <span class="fa fa-map text-muted" v-if="tender.emirates==5">sharja</span>
              <span class="fa fa-map text-muted" v-if="tender.emirates==6">ajman</span>
              <span class="fa fa-map text-muted" v-if="tender.emirates==4">>um alqwain</span>
              <span class="fa fa-map text-muted" v-if="tender.emirates==3">Ras Alkhima</span>
              <span class="fa fa-map text-muted" v-if="tender.emirates==1">Dubai</span>
              <span class="fa fa-map text-muted" v-if="tender.emirates==7">Abudabhi</span>


              <a href="#editPostModal" class="edit btn btn-primary float-right" data-toggle="modal" v-if="IsUser==10">
                <span
                  class="material-icons"
                  data-toggle="tooltip"
                  title="Edit"
                  @click="editPost(tender,$event)"
                >
                  <i class="fa fa-plus"></i> Edit Tender
                </span>
              </a>

            </div>
          </li>
        </ul>
      </div>
    </span>


<div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-7">
        <stages v-for="(tender,b) in tenders" :key="b" v-bind="tender"></stages>

    <div class="card container">


        <p class="mt-2 mr-5 ml-5 mb-3 " v-for="(tender,index) in tenders" :key="index" >
            Details
            {{tender.notes}}</p>

    </div>

<!-- Start show Offer  -->

    <span v-for="tender,index2 in tenders" :key="index2" class="card">

                <span v-for="offerconsr,ie in tender.offer_consr" :key="ie" v-bind="offerconsr">

                    <li class="list-group-item" >
                        <p><b>{{offerconsr.com_id}}</b></p>
                        <p>{{offerconsr.textOffer}}</p>

                    </li>
                </span>
                <span v-if="showTender!=null">

    </span>
    </span>




<!-- End Show Offer -->
    <!-- Comments Offers -->
<span v-if="images.length==0">
    Add File 1
</span>
<span v-else-if="images.length==1">
    Add File 2
</span>
<span v-if="images.length==2">
    Add File 3
</span>
    <div class="card" v-if="IsUser!=10">


<form @submit.prevent="SubmitOffer" enctype="multipart/form-data">

 <div class="form-group mt-3 mb-3 ml-3 mr-3">
   <!-- <label for="exampleFormControlInput1">Photo</label>
    <input type="file" @change="newPhoto($event)" class="form-control" id="photo" name="photo">
    !-->
    <textarea rows="4" class="form-control" placeholder="details Of Your Offer " v-model="CommentText" :class="[{'is-invalid': errorFor('textOffer')}]"></textarea>
     <div class="invalid-feedback"
          v-for="(error, index) in this.errorFor('textOffer')"
          :key="'textOffer' + index"
        >{{ error }}</div>

  <div class="invalid-feedback"
          v-for="(error, index) in this.errorFor('com_id')"
          :key="'com_id' + index"
        >{{ error }}</div>
 </div>





 <div class="form-group mt-3 mb-3 ml-3 mr-3">

        <div class="uploader-container mb-2"
          @dragenter.prevent="OnDragEnter"
         @dragleave.prevent="OnDragLeave"
         @dragover.prevent

         :class="{dragging:isDragging}"
         >
            <i class="fa fa-image" aria-hidden="true"></i>
            <p> Drag Or Drop </p>
            <div class="file-input">
                <label for="file">Choose file</label>
                <input type="file" name="file[]"   @change.prevent="onImageChanged" id="file" multiple :class="[{'is-invalid': errorFor('image')}]">

<div class="invalid-feedback" style="    top: 56px; position: absolute;"
          v-for="(error, index) in this.errorFor('image')"
          :key="'image' + index"
        >{{ error }}</div>
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




 </div>




         <button type="submit" class="  btn-block mx-auto btn btn-bus mt-3">Add Offer </button>




</form>
    </div>

  </div>







      <div class="col-md-5 col-sm-12 container">
        <div class="card">
          <div class="card-header">
            <h5 class="text-muted">Project files</h5>
          </div>

          <ul class="list-unstyled ml-2">
            <span v-for="tender,ind in tenders" :key="ind">
              <li v-for="file,indimg in tender.tcimg" :key="indimg" v-bind="file">
                <span v-if="file.extension=='jpg'">
                  <a :href="'Construction/image/'+ file.name" download class="btn-link text-dark">
                    <i class="far fa-fw fa-image btn-link text-primary"></i>
                    {{file.name}}
                  </a>
                </span>
                <span v-else-if="file.extension=='xlsx'">
                  <a :href="'Construction/Excel/'+ file.name" download class="btn-link text-dark">
                    <i class="fa fa-fw fa-file-csv text-success"></i>
                    {{file.name}}
                  </a>
                </span>
                <span v-else-if="file.extension=='pdf'">
                  <a :href="'Construction/pdf/'+ file.name" download class="text-dark btn-link">
                    <i class="text-danger far fa-fw fa-file-pdf"></i>
                    {{file.name}}
                  </a>
                </span>
                <span v-else-if="file.extension=='dwg'">
                  <a :href="'Construction/autocad/'+ file.name" download class="text-dark btn-link">
                    <i class="text-info far fa-fw fa-file"></i>
                    {{file.name}}
                  </a>
                </span>
              </li>
            </span>

            <!-- <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                  </li>
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="fa fa-fw  fa-file-csv"></i> Contract-10_12_2014.docx</a>
            </li>-->
          </ul>
        </div>
      </div>
    </div>
</div>
    <div id="editPostModal" class="modal fade"  v-if="IsUser==10">
      <div class="modal-dialog">
        <div class="modal-content">
          <form enctype="multipart/form-data">

            <div class="modal-header">
              <h4 class="modal-title">Add Post</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>title</label>
                <input type="text" class="form-control" required v-model="PostToEdit.title" :class="[{'is-invalid': errorFor('title')}]">
                   <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('title')"
          :key="'title' + index"
        >{{ error }}</div>
              </div>
              <div class="form-group">
                <label>body</label>
                <textarea name cols="30" class="form-control" rows="10" v-model="PostToEdit.notes"
                :class="[{'is-invalid': errorFor('notes')}]">></textarea>
                <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('notes')"
          :key="'notes' + index"
        >{{ error }}</div>
              </div>
              <div class="form-group">


                <select class="form-control" v-model="PostToEdit.emirates" :class="[{'is-invalid': errorFor('emirates')}]">
                    <option value="2">Duabi</option>
                    <option value="2">Fujira</option>
                    <option value="3">Ras Alkhima</option>
                    <option value="4">um alqwain</option>
                    <option value="5">sharja</option>
                    <option value="6">ajman</option>
                    <option value="7">Abudabhi</option>
                </select>
                <div class="invalid-feedback"
          v-for="(error, index) in this.errorFor('emirates')"
          :key="'emirates' + index"
        >{{ error }}</div>

              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
              <input type="submit" class="btn btn-success" @click.prevent="UpdatePost" value="save" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import stages from "./stages.vue";
import TitleTender from "./titleTender.vue";
export default {
  components: { stages, TitleTender },
  data() {
    return {

      tenders: null,
      isDragging:false,
      mohab:'',
      exist:null,
       files:[],
       images:[],
       FileNotAllowd:'',
      messageTender: null,
      messageUpdateTender: null,
        CommentText:null,
      showTender:[],
      tender_id :this.$route.params.id,
      errors:null,
      status:null,


    };
  },



  created() {

    $(".carousel").carousel();
    this.getDetails();
    this.getMessageTender();
    this.UpdatePost();
  },


      methods:{


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
          Echo.private(`commentConsr.${this.tender_id}`)
          .listen('commentConsr',(e)=>{
              console.log(e);
              console.log('You have new Offer Comment ');
            this.tenders.unshift(e.offer_consr);

          })
      },


      SubmitOffer(){

    let data = new FormData();


             this.files.forEach(file =>{
            data.append('images[]',file,file.name);

        })

        data.append('textOffer', this.CommentText);
        data.append('construction_id', this.tender_id);
        data.append('com_id', this.userid);


            axios.post(`insertOffer`,data).then(res=>{


            this.CommentText =" ";
            this.initializedListner();


            }).catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
                this.exist=error.response.data.exist
            }
            this.status=error.response.status
       })
       .then(()=>(this.loading=false,this.ret=false,this.alert="alert alert-success alert-dismissible"));

      },
    editPost(tender) {
      this.$store.commit("EditPost", tender);
    },
    UpdatePost() {
      /* let config ={
                header : {"content-type": 'multipart/form-data'}
            }*/

            let IsUser = this.$store.getters.IsUser

            if(IsUser==10){
                console.log(this.IsUser);
      let formdata = new FormData();

      formdata.append("id", this.PostToEdit.id);
      formdata.append("title", this.PostToEdit.title);
      formdata.append("notes", this.PostToEdit.notes);
      formdata.append("emirates", this.PostToEdit.emirates);



          //this.$router.push({name: 'consrDetails', params: {id}})
           //  localStorage.setItem('messageTender',JSON.stringify(this.message));

        this.terms =true;



      axios
        .post("/UpdateTenderConstruction", formdata /*config*/)
        .then(res => {

          $("#editPostModal").modal("hide");
          $(".modal-backdrop").css("display", "none");

          localStorage.setItem(
            "messageUpdateTender",
            JSON.stringify("You Updata This Tender Succsfully")
          );
          this.tenders.unshift(res.data);


          location.reload();
        }) .catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
            }
            this.status=error.response.status
       })
       .then(()=>(this.loading=false,this.ret=false,this.alert="alert alert-success alert-dismissible"));
            }
    }
    ,

    getMessageTender() {
      this.messageTender = localStorage.getItem("messageTender");
      this.messageUpdateTender = localStorage.getItem("messageUpdateTender");
      localStorage.removeItem("messageTender");
      localStorage.removeItem("messageUpdateTender");
    },
    getDetails() {
      axios
        .get(`/showConsrTender/${this.$route.params.id}`)
        .then(
          (response) => (
            (this.tenders = response.data )

          )
        );
    },
    errorFor(field){
        return this.hasErrors && this.errors[field] ? this.errors[field] :null;
    },
    },
computed: {
    hasErrors() {
        return 422 === this.status && this.errors !== null;
    },
     PostToEdit() {
      return this.$store.getters.PostToEdit;
    },
    IsUser(){
                return this.$store.getters.IsUser
    },
     userid(){
                return this.$store.getters.userid
    },

}

};
</script>


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
