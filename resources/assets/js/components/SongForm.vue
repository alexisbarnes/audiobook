<template>
  <div class="SongForm">
    <div class="background">
      <!---TITLE-->
      <div class="col-md-12">
        <h1 class="formTitle">add new song</h1>
      </div>
      <!---FORM-->
      <div class="col-md-12">
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="song title" v-model="title" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="artist" v-model="artist"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="album" v-model="album" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <select class="form-control" value="" v-model="genre">
              <option>Alternative</option>
              <option>Americana</option>
              <option>Blues</option>
              <option>Christian &amp; Gospel</option>
              <option>Classic Rock</option>
              <option>Classical</option>
              <option>Country</option>
              <option>Dance</option>
              <option>Electronic</option>
              <option>Experimental</option>
              <option>Hard Rock</option>
              <option>Hip-Hop/Rap</option>
              <option>Indie</option>
              <option>Jazz</option>
              <option>K-Pop</option>
              <option>Kids &amp; Family</option>
              <option>Latino</option>
              <option>Metal</option>
              <option>M&uacute;sica Mexicana</option>
              <option>M&uacute;sica Tropical</option>
              <option>Oldies</option>
              <option>Pop</option>
              <option>Pop Latino</option>
              <option>R&amp;B</option>
              <option>Raggae</option>
              <option>Rock</option>
              <option>Rock y Alternativo</option>
              <option>Singer/Songwriter</option>
              <option>Soul/Funk</option>
              <option>Stage and Screen</option>
              <option>Urbano Latino</option>
              <option>World</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="link to cover art..." v-model="artwork"/>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="youtube id..." v-model="video"/>
          </div>
        </div>
        <div class="col-md-12">
          <button class="btn btn-primary pull-right create" @click="create()">create</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {

  data() {
    return {
      title: '',
      artist: '',
      album: '',
      genre: '',
      artwork: '',
      video: ''
    }
  },
  methods: {
    create () {
      console.log('SongForm -> create');
      this.sendRequest();
    },
    sendRequest () {
      axios.post('/songs', {
        title: this.title,
        artist: this.artist,
        album: this.album,
        genre: this.genre,
        artwork: this.artwork,
        video: this.video
      })
      .then((response) => {
        console.log('SongForm -> sendRequest success');
        console.log(response.data);
        this.reset();
        this.$emit('created');
      })
      .catch((error) => {
        console.error('SongForm -> sendRequest error');
        // show an error message
      });
    },
    reset () {
      this.title = '';
      this.artist = '';
      this.album = '';
      this.genre = '';
      this.artwork = '';
      this.video = '';
    }
  }
};
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
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(0,0,0,.6);
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
