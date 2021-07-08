<template>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects Detail</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body" >
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row" v-for="detail,index in details" :key="index">

                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">min budget</span>
                      <span class="info-box-number text-center text-muted mb-0">{{detail.min}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">max budget </span>
                      <span class="info-box-number text-center text-muted mb-0">{{detail.max}}</span>
                    </div>
                  </div>
                </div>


              <div class="row">
                <div class="col-12">
                  <h4>Recent Activity</h4>
                  <span v-for="Offer,index in detail.all_offers" :key="index">
                    {{Offer.comment}}
                     <img id="myImg" :src="'offers/'+ Offer.name" width="50" >

                    <div class="post">
                      <div class="user-block" >
                        <img class="img-circle img-bordered-sm" alt="user image">
                        <span class="username" >
                          <a href="#">

                    </a>
                        </span>
                        <span class="description">Shared publicly - 7:45 PM </span>
                      </div>
                      <!-- /.user-block -->
                      <p>

                      </p>

                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                      </p>
                    </div>
                    </span>



                </div>
              </div>
              </div>


            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2" v-for="detail,index in details" :key="index">
              <h3 class="text-primary"><i class="fas fa-home"></i>

               {{detail.title}} <sup class="h6">
               <span class="project-state" v-if="detail.status==1">
                          <span class="badge badge-success">Success</span>
                      </span>
                       <span class="project-state" v-else-if="detail.status==0">
                          <span class="badge badge-warning">under review</span>
                      </span>
                       <span class="project-state" v-else-if="detail.status==2">
                          <span class="badge badge-dark">closed</span>
                      </span>
               </sup>   </h3>

              <p class="text-muted">{{detail.note}}</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Poster
                  <b class="d-block">{{detail.user.name}}</b>
                </p>
                <p class="text-sm">Date Post
                  <b class="d-block">{{detail.added_at}}</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Project Details</h5>

          <ul class="list-unstyled ml-2">

              <li v-for="file,index in detail.tcimg" :key="index" v-bind="file">
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

          </ul>



              <div class="text-center mt-5 mb-3">

                <button id="accepted" href="#" class=" btn btn-sm btn-success " v-if="detail.status==0" @click.prevent="accept">


{{accepted}}               <div class="spinner-border " :class="classes" role="status" >
  <span class="sr-only">Loading...</span>
</div></button>
                <button href="#" class="btn btn-sm btn-light text-success form-control" v-if="detail.status==1" disabled><i class="fa fa-check"></i> accepted </button>
                <a href="#" class="btn btn-sm btn-warning" v-if="detail.status==0">Report </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
       <div class="modal fade success-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <span class=" text-success"><i class="fa fa-check" aria-hidden="true"></i> {{success}}</span>
    </div>
  </div>
</div>
    <!-- /.content -->
  </div>
</template>

<script>
export default {
data(){
    return{
        details:[],
        comments:'',
        success:'',
        accepted:'accept',
        classes:'',
    }
},
created(){
    this.getTender();
},
methods: {
    getTender(){
    axios.get('/admin/ConsrTenders/'+this.$route.params.id).then(res=>{
        this.details =res.data;
        this.comments =res.data.all_offers;
    })

    },
    accept(){
this.classes="text-dark";
 $('button').addClass('btn btn-sm btn-success').attr("disabled", 'disabled');
        axios.get('/admin/accept/'+this.$route.params.id).then(res=>{
        this.success = res.data.success;

 this.accepted = 'accepted';

              $('.success-modal').modal('show');
                $('.modal-backdrop').css('display','show');
                $('button').removeClass('btn btn-sm btn-success ');
                $('.btn-warning').addClass('d-none');
                $('button').addClass('btn btn-sm btn-light text-success form-control').attr("disabled", 'disabled');

                $('#accepted').prepend('<i class="fa text-success fa-check"></i>');
this.classes = 'd-none';



    }).catch(err=>{
        $( ".hello" ).remove();
          this.success = 'Faild'
    })


    }
},

}
</script>

<style>
.fa-circle{
    font-size: 12px;
}
</style>
