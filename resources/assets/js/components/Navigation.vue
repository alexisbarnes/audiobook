<template>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="/images/logo-blk.png" class="main-logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">home <span class="sr-only">(current)</span></a></li>
        <li><a href="https://www.github.com/alexisbarnes" target="_blank">github</a></li>
        <li><a href="#">style guide</a></li>
        <li><a href="#">documentation</a></li>
        <li><a href="#">credits</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</template>

<script>
import axois from 'axios';

export default {
  name: 'Navigation',

  mounted () {
    console.log('Navigation -> mounted')
  }
}

</script>

<style scoped>
/*BOOTSTRAP NAVBAR*/
.navbar-default {
  background-color: transparent;
  border-color: transparent;
}

li {
  font-family: 'Abril Fatface', cursive;
  font-size: 30px;
}

.navbar-default .navbar-nav > li > a {
    color: #000;
}

.navbar-nav > li {
    margin-top: 30px;
}

/*ACTIVE & HOVER A*/
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    background-color: transparent;
    color: #A6130F;
}

.navbar-default .navbar-nav > li > a:hover {
    color: #A6130F;
}

/*LOGO*/
.main-logo {
  width: auto;
  height: 80px;
}
</style>
