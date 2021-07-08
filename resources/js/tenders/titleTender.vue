<template>

         <div class="card mb-5" >

  <ul class="list-group list-group-flush">
 <a @click="$router.go(-1)" style="cursor:pointer" class="ml-3  main-color"><i class="fa fa-arrow-left  fa-1x"></i></a>
    <li class="list-group-item container">


        <a class=" h1 text-dark">{{title}} </a>
        <sup class=" text-success pt-2 pb-2 pl-2 pr-2 font-weight-bold" v-if="status==1">open</sup>
        <span class=" text-warning pt-2 pb-2 pl-2 pr-2" v-if="status==0">under process</span>
        <span class=" text-dark pt-2 pb-2 pl-2 pr-2"    v-if="status==2">closed</span>



        <div class="d-block ">

       <span class="fa fa-clock-o text-muted" style="font-size:14px"> {{added_at}}</span>
        </div>
        </li>
  </ul>
</div>

</template>

<script>
export default {
props:{title:String ,status:Number,added_at:String}
}
</script>

</script>
