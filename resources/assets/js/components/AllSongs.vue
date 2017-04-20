<template>
  <div class="col-md-4">
    <div class="Song">
      <img :src="song.artwork" class="albumWork">
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
.albumWork {
  height: 340px;
  width: auto;
}

</style>
