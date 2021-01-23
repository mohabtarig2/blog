<template>

  <div>
    <div v-if="loading" class="spinner-border text-primary">
      <span class="sr-only">Loading...</span>
    </div>
    <div v-else>
      <BookableListItem
        v-for="(bookable,index) in bookables"
        :key="index"
        v-bind="bookable"
      >

      </BookableListItem>

    </div>
  </div>
</template>

<script>
import BookableListItem from "./BookableListItem";
export default {
  components: {
    BookableListItem: BookableListItem,
  },
  data() {
    return {
      bookables: null,
      loading: false,
    };
  },


  created() {

    this.loading = true;

const  request = axios.get('/api/bookables').then(response=>{
this.bookables = response.data.data;
this.loading = false;
});

    //setTimeout ==
  }
};
</script>
