<template>
  <div class="App">
    <div class="container-fluid">
      <Navigation></Navigation>
    </div>

    <div class="container">
      <div class="col-md-12">
        <div class="SongsList" v-show="songs.length > 0">
          <AllSongs v-for="(song, index) in songs" :key="index" :song="song"></AllSongs>
        </div>
        <p v-show="songs.length === 0">There is no music in the database.</p>
      </div>
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
</style>
