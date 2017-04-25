<template>
  <div class="SongInfo">
    <div class="row">

      <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 background">
        <!---YOUTUBE VIDEO-->
        <!--https://github.com/kaorun343/vue-youtube-embed-->
        <div class="row">
          <div class="col-md-12">
            <div class="youtube video">
              <youtube :video-id="song.video" @ready="ready" @playing="playing"></youtube>
            </div>
        </div>
      </div>

          <div class="line-break"></div>
          <a href="#" class="edit-link" @click="showEditing()">edit</a>

          <!--BOTTOM OF FORUM-->
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-4">
                  <img :src="song.artwork" class="coverArt"/>
                </div>

                <div class="col-md-8 all-info">
                  <p class="info"> {{ song.title }} </p>
                  <p class="info"> {{ song.artist }} </p>
                  <p class="info"> {{ song.album }} </p>
                  <p class="info"> {{ song.genre }} </p>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

</template>

<script>
import axios from 'axios';
import SongUpdate from './SongUpdate'
import Vue from 'vue';
import VueYouTubeEmbed from 'vue-youtube-embed';
Vue.use(VueYouTubeEmbed);

export default {
  components: {
    SongUpdate
  },
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
      genre: this.song.genre,
      UpdateForm: false
    }
  },

  methods: {
    showEditing () {
      this.UpdateForm = true
    },
    //Videoplayer functions
    ready (player) {
      this.player = player
    },

    playing(player) {
      //The player is playing a video
    },

    change () {
      // when you change the value, the player will also change.
      // If you would like to change `playerVars`, please change it before you change `videoId`.
      // If `playerVars.autoplay` is 1, `loadVideoById` will be called.
      // If `playersVars.autoplay` is 0, `cueVideoById` will be called.
      this.videoId = 'another video id'
    },

    stop () {
      this.player.stopVideo()
    },

    pause () {
      this.player.pauseVideo()
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
  height: 810px;
  margin: 20px;
}


a {
  color: #000 !important;
  font-size: 20px;
}

a:hover {
  color: #A6130F !important;
  text-decoration: none
}
/*VIDEO*/
.video {
  margin: 20px 0 0 0;
  text-align: center;
}

/*LINE BEAK*/
.line-break {
  border-bottom: 1px solid #ccc;
  margin: 20px;
}

/*EDIT*/
.edit-link {
  float: right;
  padding: 0 18px 0 0;
}


/*IMG*/
.coverArt {
  height: 300px;
  width: auto;
}

.all-info {
  padding: 24px 0 0 90px;
  font-family: 'Open sans', sans-serif;
  color: #000;
  font-size: 30px;
}

/*Video player is responsive for mobile*/
@media screen and (max-width: 700px) {
  iframe {
    width: 100%;
  }
}

</style>
