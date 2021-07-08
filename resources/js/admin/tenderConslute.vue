<template>


  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
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
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          tender Name
                      </th>
                      <th style="width: 30%">
                          notes
                      </th>
                      <th>
                          tender stages
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>






                  <tr v-for="(data,index) in details.data" :key="index">
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                              {{data.title}}
                          </a>
                          <br/>
                          <small>
                              Created {{data.added_at}}
                          </small>
                      </td>
                      <td>
                        <ul class="list-inline">
                         <li> {{data.note.substr(0,40)}}</li>
                          </ul>
                      </td>
                      <td class="project_progress" v-if="data.stage==0">
                          <div class="progress progress-sm" >
                              <div class="progress-bar bg-red" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                              </div>
                          </div>
                          <small>
                              20% Complete
                          </small>
                      </td>
                           <td class="project_progress" v-if="data.stage==1">
                          <div class="progress progress-sm" >
                              <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                              </div>
                          </div>
                          <small>
                              50% Complete
                          </small>
                      </td>
                           <td class="project_progress" v-if="data.stage==2">
                          <div class="progress progress-sm" >
                              <div class="progress-bar bg-green\" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                              </div>
                          </div>
                          <small>
                              100% Complete
                          </small>
                      </td>
                      <td class="project-state" v-if="data.status==1">
                          <span class="badge badge-success">Success</span>
                      </td>
                       <td class="project-state" v-else-if="data.status==0">
                          <span class="badge badge-warning">under review</span>
                      </td>
                       <td class="project-state" v-else-if="data.status==2">
                          <span class="badge badge-dark">closed</span>
                      </td>
                      <td class="project-actions text-right">

                          <router-link class="btn btn-primary btn-sm" :to="{name:'tcDtails',params: { id: data.id }}" target="_blank">


                              <i class="fas fa-folder">
                              </i>
                              View
                          </router-link>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
              </tbody>
          </table>
         <div class="card-footer"> <pagination :data="details" @pagination-change-page="detailsTender"></pagination></div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</template>

<script>
export default {
    data(){
        return{
            details:'',
            files: null,
            tender_id :this.$route.params.id,
        }
    },
    created(){
        this.detailsTender();
    },
    methods: {
            detailsTender(page){
                axios.get('/admin/detailsTenderConsulte?page=' + page).then(res=>{
                    this.details = res.data;
                })
            },
          /*  ShowTender(){


              $('.success-modal').modal('show');
                $('.modal-backdrop').css('display','show');
            }
            */
    },

}
</script>
