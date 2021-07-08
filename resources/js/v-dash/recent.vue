<template>
<div>
<header>
  <!-- Hacker News header -->
</header>

<div v-for="(item, $index) in list" :key="$index">
  <!-- Hacker News item loop -->
</div>

<infinite-loading @infinite="infiniteHandler"></infinite-loading>
</div>


</template>
<script>




export default {
  data() {
    return {
      page: 1,
      list: [],
    };
  },
  methods: {
    infiniteHandler($state,page) {

      axios.get("/api/Ads?page=", {
        params: {
          page: this.page,
        },
      }).then(({ data }) => {
        if (data.hits.length) {
          this.page += 1;
          this.list.push(...data.hits);
          $state.loaded();
        } else {
          $state.complete();
        }
      });
    },
  },
};


</script>
