<template>
  <div class="App">
    <div class="container-fluid">
      <Navigation></Navigation>
    </div>

    <div class="container-fluid">
      <FootNav></FootNav>
    </div>
  </div>
</template>

<script>
  import axios from 'axios';
  import Navigation from './Navigation';
  import FootNav from './FootNav';

  export default {
    components: {
      Navigation,
      FootNav
    }
  }

</script>

<style>
body {
  background-color: #F9F9F9;
  font-family: 'Open Sans', sans-serif;
  color: #000;
}
</style>
