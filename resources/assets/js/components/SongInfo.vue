<template>
  <div class="SongInfo">
    <div class="row">

      <div v-if="UpdateForm">
        <SongUpdate :song="song" @updated="updated"></SongUpdate>
      </div>

      <div v-else>
      <div class="background">
        <!---YOUTUBE VIDEO-->
        <!--https://github.com/kaorun343/vue-youtube-embed-->
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xl-10 col-xl-offset-1">
            <div class="youtube video">
              <youtube :video-id="song.video" @ready="ready" @playing="playing" player-width="100%"></youtube>
            </div>
        </div>
      </div>

          <div class="line-break"></div>
          <a href="#" class="edit-link" @click="showEditing()">edit</a>

          <!--BOTTOM OF FORUM-->
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  <img :src="song.artwork" class="coverArt"/>
                </div>

                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 all-info">
                  <p class="info"> {{ song.title }} </p>
                  <p class="info"> {{ song.artist }} </p>
                  <p class="info"> {{ song.album }} </p>
                  <p class="info"> {{ song.genre }} </p>

                  <button type="button" class="btn btn-danger" @click="remove()" >Delete</button>
                </div>

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
    console.log('SongInfo -> mounted', this.song)
  },

  props: [
    'song'
  ],

  data () {
    return {
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

    updated (e) {
      this.$emit('updated', e);
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
    },
    remove (i) {
      console.log(`App -> remove ID ${i}`);
      axios.delete(`/songs/${this.song.id}`)
      .then((response) => {
        console.log('Song -> update success');
        this.$emit('deleted', this.song);
      })
      .catch((error) => {
        console.log('Song -> save error');
      })
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

/*DELETE BTN*/
.btn-danger {
  background-color: #A6130F;
  border-color: #A6130F;
  font-size: 20px;
  padding: 8px 26px;
  border-radius: 9px;
  float: right;
  margin: 0 10px 0 0;
}

.btn-danger:hover {
  background-color: #450806;
  border-color: #450806;
}



/*MEDIA QUERIES*/

@media screen and (max-width: 991px) {
  .coverArt {
    height: 220px;
    width: auto;
  }
  .all-info {
    padding: 0;
    font-size: 22px;
  }
}

/*Video player is responsive for mobile*/
@media screen and (max-width: 700px) {
  iframe {
    width: 100%;
  }
}

@media screen and (max-width: 400px) {
  .coverArt {
    height: 118px;
    width: auto;
  }

  .background {
    height: 1000px;
  }

  .all-info {
    padding: 20px;
  }
}


</style>
