<template>
  <div class="App">
    <!--PAGE NAVIGATION-->
    <div class="container-fluid">
      <Navigation></Navigation>
    </div>

    <!--DISPLAY OF ALL SONGS-->
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-lg-2 add">
          <button type="button" class="btn btn-primary">Add Song</button>
        </div>
        <div class="col-md-4 col-lg-4 search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-4 -->
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            <div class="SongsList" v-show="songs.length > 0">
              <AllSongs v-for="(song, index) in songs" :key="index" :song="song"></AllSongs>
            </div>
            <p v-show="songs.length === 0">There is no music in the database.</p>
            <!-- <SongForm></SongForm> -->
        </div>

        <!-- <SongInfo></SongInfo> -->
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
  import SongForm from './SongForm';
  import SongInfo from './SongInfo';

  export default {
    components: {
      Navigation,
      FootNav,
      AllSongs,
      SongForm,
      SongInfo
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
          });
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

.add {
  margin: 14px;
}

.btn-primary {
  background-color: #6D8C77 !important;
  border-color: #6D8C77 !important;
}
</style>
