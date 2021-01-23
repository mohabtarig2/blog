<template>
    <div>
        <router-link  :to="{name:'bookable',params:{id} }">
 <h1>{{title}}</h1>
        </router-link>

        <p>{{description}}</p>
        <p>{{id}}</p>
    </div>
</template>


<script>
export default {
     props:{title:String,description:String,id:Number} ,
     mounted() {
            console.log(this.title);
        },
    //props:["title",'content']
};
</script>
