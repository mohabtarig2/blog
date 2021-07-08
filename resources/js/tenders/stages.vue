<template>

            <div class="card" >
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
         <ul class="progressbar">
             <span v-if="stage==0">
                 <li class="active" style="background">Receive offers</li>
          <li>CImplementation stage</li>
          <li>Completion stage</li>
             </span>
             <span v-if="stage==1">
                 <li class="active">Receive offers</li>
          <li class="active">CImplementation stage</li>
          <li>Completion stage</li>
             </span>

            <span v-if="stage==2">
                 <li class="active">Receive offers</li>
          <li class="active">CImplementation stage</li>
          <li class="active">Completion stage</li>
             </span>



  </ul>
        </li>
  </ul>
</div>

</template>
<script>
export default {
props:{stage:Number}
}
</script>

<style scoped>


.progressbar {
      counter-reset: step;
  }
  .progressbar li {
      list-style-type: none;
      width: 33%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
      z-index: 1;
  }
  .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;

  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: #e74c3c;
  }
  .progressbar li.active:before {
      border-color: #e74c3c;
  }
  .progressbar li.active + li:after {
      background-color: #e74c3c;
  }



.list-group-flush > .list-group-item:last-child {
    border-bottom-width: 0;
    z-index: 0;
}



</style>
