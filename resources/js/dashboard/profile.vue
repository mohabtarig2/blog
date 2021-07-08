<template>
    <div>





<div class="container">

<h1 class="text-center text-muted mt-4"> Profile Company </h1>

<div class="row">
<div class="col-md-4">
<img src="http://via.placeholder.com/300" alt="..." class="mx-auto d-block img-thumbnail">
<h2 class="text-center mt-2"> {{company_en}}</h2>
<p class="text-muted text-center">

          <span v-if="categories==6">construction</span>
          <span v-if="categories==5">interior design</span>
          <span v-if="categories==4">Havc</span>
          <span v-if="categories==3">Stone </span>
          <span v-if="categories==2">Furniture</span>
          <span v-if="categories==1">consutlances</span>
</p>

</div>

<div class="col-md-8">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><i class="fa fa-user text-dark"></i> Manger Name</th>
      <th scope="col">{{manager_en}}</th>

    </tr>
  </thead>
  <tbody>
      <tr>
      <th scope="col"><i class="fa fa-envelope text-dark"></i> Email</th>
      <th scope="col">{{email}}</th>

    </tr>
    <tr>
   <th scope="col"><i class="fa fa-mobile text-dark"></i> Mobile</th>
      <td>{{mobile}}</td>


    </tr>
    <tr>
      <th scope="col"><i class="fa fa-phone text-dark"></i> phone</th>
      <td>{{phone}}</td>


    </tr>
    <tr>
     <th scope="col"><i class="fa fa-calendar text-dark"></i> date Create</th>
      <td>{{date_create}}</td>


    </tr>
    <tr>
     <th scope="col"><i class="fa fa-map text-dark"></i> Emratis</th>
      <td>
          <span v-if="emirates==7">Abudabhi</span>
          <span v-if="emirates==6">ajman</span>
          <span v-if="emirates==5">sharja</span>
          <span v-if="emirates==4">um alqwain</span>
          <span v-if="emirates==3">Ras Alkhima</span>
          <span v-if="emirates==2">Fujira</span>
          <span v-if="emirates==1">Duabi</span>

      </td>


    </tr>
  </tbody>
</table>
</div>
</div>




</div>

            </div>



</template>




<script>
export default {

  props:{email:String,
         mobile:String,
         categories:String,
         manager_en:String,
         mobile:String,
         phone:String,
         date_create:String,
         manager_en:String,
         emirates:String,
         company_en:String,
         },

    async created() {




    await axios.get('api/company/profile').then(response=>{
        this.active = response.data;
      this.email = this.active.email;
      this.mobile = this.active.mobile;
      this.categories = this.active.company.categories;
      this.phone = this.active.company.phone;
      this.date_create = this.active.company.date_create;
      this.manager_en = this.active.company.manager_en;
      this.emirates = this.active.company.emirates;
      this.company_en = this.active.company.company_en;
});

}
}
</script>
