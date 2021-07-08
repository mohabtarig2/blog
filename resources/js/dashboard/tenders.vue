<template>
    <div>
            <div class="container">
                    <p class="h2 text-primary text-center mt-5 mb-5">Add Your Tenders</p>
                    <div class="row">
                        <div class="col-md-4 mb-5 ">
                            <router-link :to="{name:'consultances'}">
                        <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x  text-center d-block text-primary mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">Engineering Consultancy</p>
                             </div>
                        </div>

                            </router-link>

                        </div>
                        <div class="col-md-4 mb-5 ">
                            <router-link :to="{name:'constructionTender'}">
                             <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x  text-center d-block text-primary mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">Construction</p>
                             </div>
                        </div>
                            </router-link>
                        </div>
                        <div class="col-md-4 mb-5 ">
                                 <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x text-center d-block text-primary mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">Interior decoration</p>
                             </div>
                        </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-5 ">

                        <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x  text-center d-block text-primary mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">HVAC companies</p>
                             </div>
                        </div>


                        </div>
                        <div class="col-md-4 mb-5 ">
                             <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x  text-center d-block text-primary mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">Stone companies </p>
                             </div>
                        </div>
                        </div>
                        <div class="col-md-4 mb-5 ">
                                 <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x text-center d-block text-primary mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">Furniture tenders</p>
                             </div>
                        </div>
                        </div>

                    </div>

                     <div class="row">
                        <div class="col-md-4 mb-5 ">

                        <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x  text-center d-block text-primary mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">Swimming pools</p>
                             </div>
                        </div>


                        </div>
                        <div class="col-md-4 mb-5 ">
                             <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x  text-center d-block text-muted mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">
                                    Organizing gardens
                                    <br>
                                    <small>(Comming soon)</small>

                                    </p>

                             </div>
                        </div>
                        </div>
                        <div class="col-md-4 mb-5 ">
                                 <div class="card w-100">
                            <div class="card-body">
                               <i class="fa fa-home fa-3x text-center d-block text-muted mt-3"></i>
                                <p class="text-center font-weight-bold text-muted mb-0">Farms

                                    <br>
                                    <small>(Comming soon)</small>
                                </p>


                             </div>
                        </div>
                        </div>

                    </div>




            </div>
    </div>
</template>

<script>
export default {
    data() {
     return{

    }
    }

}
</script>
