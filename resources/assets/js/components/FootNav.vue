<template>
  <div class="container-fluid">
    <p>&copy; <a>Alexis Barnes</a></p>
  </div>

</template>

<script>
import axois from 'axios';
export default {

  name: 'FootNav',
  mounted () {
    console.log('FootNav -> mounted')
  }

}

</script>

<style scoped>
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
