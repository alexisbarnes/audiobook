<template>
  <div class="SongInfo">
    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 background">
      <!---YOUTUBE VIDEO-->
      <!--https://github.com/kaorun343/vue-youtube-embed-->
      <div class="col-md-12">
        <div class="youtube">
          <youtube :video-id="song.video" @ready="ready" @playing="playing"></youtube>
        </div>

        <div class="line-break"></div>

        <!--BOTTOM OF FORUM-->
        <div class="col-md-12">
          <div class="col-md-4">
            <img :src="song.artwork" />
          </div>

          <div class="col-md-8">
            <p class="info"> {{ song.title }} </p>
            <p class="info"> {{ song.artist }} </p>
            <p class="info"> {{ song.album }} </p>
            <p class="info"> {{ song.genre }} </p>
          </div>
        </div>
      </div>
      </div>
    </div>

</template>

<script>
import axios from 'axios';
import Vue from 'vue';
import VueYouTubeEmbed from 'vue-youtube-embed';
Vue.use(VueYouTubeEmbed);

export default {
  name: 'SongInfo',

  mounted () {
    console.log('SongInfo -> mounted')
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
  }

}
</script>

<style scoped>
body {
  font-family: 'Open Sans', sans-serif;
}

.background {
  background-color: #F4EDE6;
  border-radius: 25px;
  height: 575px;
  margin: 20px;
}

.formTitle {
  font-family: 'Abril Fatface', cursive;
  font-size: 50px;
  text-align: center;
  color: #000;
}

.back {
  display: inline-block;
  float: right;
  margin-top: 37px;
}

a {
  color: #000 !important;
  font-size: 20px;
}

a:hover {
  color: #A6130F !important;
  text-decoration: none
}

.back img {
  height: 28px;
  width: auto;
}

.backTxt {
  margin: 5px;
}

/*INPUT FORM*/
.form-group {
  margin: 24px;
}

.form-control:focus {
  border-color: #000;
}

input::placeholder {
  font-family: 'Open Sans', sans-serif;
  font-style: italic;
}

/*BTN STYLES*/
.create {
  margin-right: 25px;
  font-size: 40px;
  padding: 3px 58px;
  border-radius: 9px;
}


</style>
