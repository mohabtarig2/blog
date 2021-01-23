<template>


    <div>

 <button type="button" class="close" aria-label="Close" @click="Ttoast">
  <span aria-hidden="true">&times;</span>
</button>


<div :class="toast">M</div>

        <h1>{{title}}</h1>

        <p>{{Description}}</p>
        <p>{{id}}</p>
    </div>



</template>
<script>
export default {
     props:{title:String,Description:String,id:Number} ,
     mounted() {
            console.log(this.title);
        },
        data(){
            return{
                toast:'d-none'
            }
        },
        methods:{
            Ttoast(){
             this.toast='d-block';
             alert('confirm');


            }
        }

};
</script>
