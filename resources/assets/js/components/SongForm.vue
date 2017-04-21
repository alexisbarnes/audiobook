<template>
  <div class="SongForm">
    <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 background">
      <!---TITLE-->
      <div class="col-md-12">
        <a href="#" class="back"><img src="/images/back-arrow.png" /><span class="backTxt">back</span></a>
        <h1 class="formTitle">add new song</h1>
      </div>
      <!---FORM-->
      <div class="col-md-12">
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="song title" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="artist" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="album" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="link to cover art..." />
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="link to media..." />
          </div>
        </div>
        <div class="col-md-12">
          <button class="btn btn-primary pull-right create">create</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'SongForm',

  mounted () {
    console.log('SongForm -> mounted')
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
