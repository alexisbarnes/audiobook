<template>
  <div class="App">
    <!--PAGE NAVIGATION-->
    <div class="container-fluid">
      <Navigation></Navigation>
    </div>


    <div class="container">
      <div class="row">
        <!---DESKTOP ADD SONG BTN-->
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 add">
          <div v-if="showForm || showCancel">
            <!--CANCEL BUTTON FOR SONGFORM-->
            <a href="#" @click="close()"><div class="exit"><p class="x-style">x</p></div></a>
          </div>
          <div v-else>
            <div class="hidden-xs hidden-sm">
            <button type="button" class="btn btn-primary" @click="songForm()" :songForm="songForm">Add Song</button>
          </div>
          </div>
        </div>

          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
              <p class="intro-txt">AudioBook is a database that holds the music videos for all of your favorite songs. Here you will be able to add new songs, update the information, and delete them from the databse. To get started, click "Add Song."</p>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <!---CREATE FORM-->
          <div v-if="showForm">
            <SongForm @created="fetch"></SongForm>
          </div>
          <div v-else>
              <SongInfo v-if="activeSong" :song="activeSong" @updated="update" @deleted="deleted"></SongInfo>
              <div v-show="!activeSong">
                <AllSongs v-for="(song, index) in songs" :song="song" @selected="selectedSong"></AllSongs>
              </div>
              <p class="no-songs" v-show="songs.length === 0">There are no songs in the database. Click "Add Song" to get started.</p>


          </div>

        </div>
      </div>

      <!--Add New button for mobile-->
      <!--Source: https://codepen.io/simoberny/pen/pJZJQY-->
      <div v-if="!showCancel">
        <div class="visible-xs visible-sm">
          <div id="floating-button" @click="songForm()" :songForm="songForm">
            <p class="plus">+</p>
          </div>
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
  import SongForm from './SongForm';
  import SongInfo from './SongInfo';
  import SongUpdate from './SongUpdate';

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
        songs: [],
        showForm: false,
        activeSong: null,
        showCancel: false
      }
    },

    mounted () {
      this.fetch();
    },

    methods: {
      songForm () {
        this.showForm = true;
        this.showCancel = true;
        // this.creating = true;
        // this.show.creating = true;
        // creating: true;
        console.log('songForm');

      },

      selectedSong(s) {
        this.activeSong = s;
        this.showCancel = true;
      },

      close () {
        this.showForm = false;
        this.activeSong = null;
        this.showCancel = false;
      },

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
          this.showForm = false;
          this.showCancel = false;
      },

      update (data) {
        var i = this.songs.indexOf(data.song);
        for (var d in data) {
          if (d === 'song') continue;
          this.songs[i][d] = data[d];
        }
        this.activeSong = null;
        this.showCancel = false;
      },

      deleted (data) {
        var i = this.songs.indexOf(data);
        console.log(`App -> remove ID: ${i}`);
        this.songs.splice(i, 1);
        this.activeSong = null;
        this.showCancel = false;
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

#floating-button {
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: #6D8C77;
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
  box-shadow: 0px 2px 5px #666;
}

.plus {
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 60px;
  font-size: 60px;
  font-weight: 300;
}

.form-control:focus {
  border-color: #000 !important;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(0,0,0,.6) !important;
}

input::placeholder {
  font-family: 'Open sans' sans-serif;
  font-style: italic;
}

.exit {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #A6130F;
  /*position: fixed;*/
  /*bottom: 30px;*/
  /*right: 30px;*/
  /*cursor: pointer;*/
  box-shadow: 0px 2px 5px #666;
  display: inline-block;
}

.x-style {
  color: #FFF;
  display: block;
  text-align: center;
  padding: 10px;
  margin: 0;
  line-height: 17px;
  font-size: 35px;
  font-weight: 300;
}

.no-songs {
  text-align: center;
  color: #000;
  font-size: 30px;
}
</style>
