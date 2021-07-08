<template>
    <div>

 <span>{{name}}</span>


 <small>{{email}}</small>



 <small>{{id}}</small>




    </div>
</template>


<script>
export default {
     props:{name:String,email:String,id:Number} ,

    //props:["title",'content']
};
</script>
<style  scoped>
small{
    font-size:10px;
}
</style>
