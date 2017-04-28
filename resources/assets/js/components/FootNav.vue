<template>
  <div class="container-fluid">
    <div class="footer">
      <p>&copy; <a href="http://alexisbarnes.com" target="_blank">Alexis Barnes</a></p>
    </div>
  </div>

</template>

<script>
import axois from 'axios';
export default {

  name: 'FootNav',
  mounted () {
    // console.log('FootNav -> mounted')
  }

}

</script>

<style scoped>
.footer {
  margin: 20px;
}

p {
  font-family: 'Open Sans', sans-serif;
  color: #000;
  text-align: center;
}

a {
  text-decoration: underline;
  color: #000;
}

a:hover {
  color: #A6130F;
  cursor: pointer;
}
</style>
