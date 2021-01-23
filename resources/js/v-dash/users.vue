<template>
    <div>

 <span>hello , {{name}}</span>
 <p>{{email}}</p>




    </div>
</template>


<script>
export default {
     props:{name:String,email:String} ,

    //props:["title",'content']
};
</script>
