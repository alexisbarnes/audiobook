<template>
  <div class="SongForm">
    <div class="col-md-10 col-md-offset-2 background">
      <!---TITLE-->
      <div class="col-md-12">
        <h1>add new song</h1>
        <a href="#">back</a>
      </div>
      <!---FORM-->
      <div class="col-md-12">
        <div class="col-md-6">
          <input type="text" placeholder="song title" />
        </div>
        <div class="col-md-6">
          <input type="text" placeholder="artist" />
        </div>
        <div class="col-md-6">
          <input type="text" placeholder="album" />
        </div>
        <div class="col-md-6">
          <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="col-md-12">
          <input type="text" placholder="link to cover art..." />
        </div>
        <div class="col-md-12">
          <input type="text" placeholder="link to media..." />
        </div>
        <div class="col-md-12">
          <button class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>
</template>
