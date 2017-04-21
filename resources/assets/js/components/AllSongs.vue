<template>
    <div class="col-md-4">
      <div class="Song">
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
      </div>
    </div>

</template>

<script>
import axios from 'axios';
export default {
  name: 'AllSongs',

  mounted () {
    console.log('AllSongs -> mounted')
  },

  props: [
    'song'
  ],

  data() {
    return {
      title: this.song.title,
      artist: this.song.artist,
      album: this.song.album,
      artwork: this.song.artwork,
      video: this.song.video,
      genre: this.song.genre
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
  background-color: rgba(204, 204, 204, 0.6);
}

.infoTitle {
  color: #000;
  font-size: 30px;
  display: inline-block;
  font-weight: bold;
}

.info {
  color: #000;
  font-size: 30px;
  display: inline-block;
  padding-left: 5px;
}

.songFormat {
  margin: 10px;
}

</style>
