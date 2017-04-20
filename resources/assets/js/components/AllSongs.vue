<template>
  <div class="col-md-4">
    <div class="Song">
      <div class="songInfo" :style="{'background-image': 'url(' + song.artwork + ')'}">
        <div class="opacity">
          <div class="songFormat">
            <span class="info">title:</span><p class="text"> {{ song.title }} </p><br>
            <span class="info">artist:</span><p class="text"> {{ song.artist }} </p><br>
            <span class="info">album:</span><p class="text"> {{ song.album }}</p>
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
      video: this.song.video
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
}

.opacity {
  height: 340px;
  width: auto;
  background-size: 340px auto;
  background-color: rgba(204, 204, 204, 0.6);
}

.info {
  color: #000;
  font-size: 30px;
  display: inline-block;
}

.text {
  color: #000;
  font-size: 30px;
  display: inline-block;
}

.songFormat {
  margin: 10px;
}

</style>
