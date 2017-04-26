<template>
  <div class="App">
    <!--PAGE NAVIGATION-->
    <div class="container-fluid">
      <Navigation></Navigation>
    </div>


    <div class="container">
      <div class="row">
        <!---DESKTOP ADD SONG BTN-->
        <div class="hidden-xs hidden-sm col-md-2 col-lg-2 add">
          <div v-if="showForm || showCancel">
            <!--CANCEL BUTTON FOR SONGFORM-->
            <a href="#" @click="close()"><div class="exit"><p class="x-style">x</p></div></a>
          </div>
          <div v-else>
            <button type="button" class="btn btn-primary" @click="songForm()" :songForm="songForm">Add Song</button>
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
              <SongInfo v-if="activeSong" :song="activeSong"></SongInfo>
              <div v-show="!activeSong">
                <AllSongs v-for="(song, index) in songs" :song="song" @selected="selectedSong"></AllSongs>
              </div>


          </div>

        </div>
      </div>

      <!--Add New button for mobile-->
      <!--Source: https://codepen.io/simoberny/pen/pJZJQY-->
        <div class="visible-xs visible-sm">
          <div id="floating-button">
            <p class="plus">+</p>
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
      },

      update (data) {
        var i = this.songs.indexOf(data.song);
        for (var d in data) {
          this.songs[i][d] = data[d];
        }
      },

      remove (i) {
        console.log(`App -> remove ID: ${i}`);
        this.songs.splice(i, 1);
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
</style>
