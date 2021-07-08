<template>
<div class="container">

        <li class="list-group-item" >

        <span  class="h5 text-primary font-weight-bold">{{com_id}}</span>
        <i class="fa fa-star "></i>
        <i class="fa fa-star "></i>
        <i class="fa fa-star "></i>
        <i class="fa fa-star text-op"></i>
    </li>
    <li class="list-group-item mb-2">

  {{comment}}
  <div class="files">
<table class="table table-striped">
  <thead>
          <tr>
      <th scope="col">Total Area Build</th>
      <th scope="col">{{TotalAreaBuild}} </th>

    </tr>
    <tr>
      <th scope="col">Budget</th>
      <th scope="col">{{budget}} AED</th>

    </tr>
  </thead>

  <tbody>
    <tr>


      <td>File</td>
      <td><i class="fa fa-pdf"><img :src="'offers/'+ name" width="300"></i>
      <a :href="'offers/'+ name" download><i class="fa fa-download  text-dark font-wieght-font"><span class="font-weight-bold"> download</span> </i></a>

      </td>
    </tr>

  </tbody>
</table>
  </div>
  <button class="btn btn-success" v-if="com_id">Accept</button>
  <button class="btn btn-secondary">report </button>
    </li>


</div>
</template>


<script>
export default {
    props:{comment:String,com_id:Number,count:Number,budget:Number,name:String,path:String,TotalAreaBuild:Number},

}
</script>
