<?php
include "partials/header.php";
?>

<div id="progress">
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="40"
    aria-valuemin="0" aria-valuemax="100" style="width:40%">
    <span class="progress-bold">40%</span>
    </div>
  </div>
</div>

<div class="container" id="content">
  <div class="row">
    <div class="col-lg-5">
          <h1>Song recommendations</h1>
          <p>On the following pages, you will be shown three different playlists with song recommendations that are personalized for you. For each playlist, you will be shown different statements and it is your task to select an option to indicate the extent to which you agree or disagree with each statement.<p>
          <p>Next to each song in the playlist, there are checkboxes, where you will answer whether you know the song, listen to the song, and if you think the song is popular.</p>
          <p>Keep in mind when answering the questions that we are interested in your personal opinions, and that there are no right or wrong answers.<p>
          <form method="post">
              <input class="btn btn-primary cont" type="submit" name="continue" value="Continue"/>
          </form>
      </div>
      <div class="col-lg-5">
        <img class="playlist-img" src="img/playlist-pink.svg"/>
      </div>
  </div>
</div>


<?php

if (isset($_POST["continue"])) { 
    header("Location: playlist-1842.php");
}

include "partials/footer.php";
?>