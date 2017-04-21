<template>
  <div class="App">
    <!--PAGE NAVIGATION-->
    <div class="container-fluid">
      <Navigation></Navigation>
    </div>

    <!--DISPLAY OF ALL SONGS-->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="SongsList" v-show="songs.length > 0">
            <AllSongs v-for="(song, index) in songs" :key="index" :song="song"></AllSongs>
          </div>
          <p v-show="songs.length === 0">There is no music in the database.</p>
        </div>
      </div>
    </div>

    <!--FOOTER-->
    <div class="container-fluid">
      <FootNav></FootNav>
    </div>
  </div>
</template>

<script>
  import axios from 'axios';
  import Navigation from './Navigation';
  import FootNav from './FootNav';
  import AllSongs from './AllSongs';

  export default {
    components: {
      Navigation,
      FootNav,
      AllSongs
    },

    data () {
      return {
        songs: []
      }
    },

    mounted () {
      this.fetch();
    },

    methods: {
      fetch () {
        console.log('App -> fetch');
        axios.get('/songs')
          .then((response) => {
            console.log('App -> fetch success');
            console.log(response.data);
            this.songs = response.data;
          })
          .catch((response) => {
            console.log('App -> fetch error');
            //show error
          })
      }
    }
  }

</script>

<style>
body {
  background-color: #F9F9F9;
  font-family: 'Open Sans', sans-serif;
  color: #000;
}

.search {
  margin: 14px;
  float: right !important;
}
</style>
