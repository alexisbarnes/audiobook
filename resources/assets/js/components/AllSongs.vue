<template>
  <div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">


        <div class="Song" @click="chosen">
          <a href="#">
            <div class="songInfo" :style="{'background-image': 'url(' + song.artwork + ')'}">
              <div class="opacity">
                <div class="songFormat">
                  <span class="infoTitle">title:</span><p class="info"> {{ song.title }} </p><br>
                  <span class="infoTitle">artist:</span><p class="info"> {{ song.artist }} </p><br>
                  <span class="infoTitle">album:</span><p class="info"> {{ song.album }}</p><br>
                  <span class="infoTitle">genre:</span><p class="info"> {{ song.genre }}</p>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>


  </div>
</template>

<script>
import axios from 'axios';
import SongInfo from './SongInfo';
export default {
  components: {
    SongInfo
  },

  name: 'AllSongs',

  mounted () {
    // console.log('AllSongs -> mounted')
  },

  props: [
    'song'
  ],

  data () {
    return {
      title: this.song.title,
      artist: this.song.artist,
      album: this.song.album,
      artwork: this.song.artwork,
      video: this.song.video,
      genre: this.song.genre
    }
  },
  methods: {
  chosen () {
    // this.currentSong = true;
    this.$emit('selected', this.song)
  },

  cancel () {
    this.currentSong = false;
  }

  }
}
</script>

<style scoped>
body {
  font-family: 'Open Sans', sans-serif;
  color: #000;
}

.songInfo {
  height: 340px;
  width: auto;
  background-size: 340px auto;
  background-repeat: no-repeat;
  /*opacity: 0.6;*/
}

.opacity {
  height: 340px;
  width: 340px;
  background-size: 340px auto;
  background-color: rgba(204, 204, 204, 0.8);
}

.opacity:hover {
  opacity: 0;
}

.infoTitle {
  color: #000;
  font-size: 25px;
  display: inline-block;
  font-weight: bold;
}

.info {
  color: #000;
  font-size: 20px;
  display: inline-block;
  padding-left: 5px;
}

.songFormat {
  margin: 10px;
}

/*DELETE BTN*/
.delete {
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
  margin-top: 10px;
  float: right;
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

/*MEDIA QUERIES*/
@media only screen and (max-width: 1199px) {
  .songInfo {
    background-size: 283px auto;
  }
  .opacity {
    height: 283px;
    width: 283px;
  }

  .infoTitle {
    font-size: 18px;
  }

  .info {
    font-size: 18px;
  }
}

</style>
