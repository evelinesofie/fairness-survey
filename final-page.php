<?php
include "partials/header.php";
?>

<div id="progress">
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="95"
    aria-valuemin="0" aria-valuemax="100" style="width:95%">
    <span class="progress-bold">95%</span>
    </div>
  </div>
</div>

<div class="container" id="content">
  <div class="col-lg-12">
    <div class="row">
      <h1 class="playlist">Final Question</h1>
      <form method="post">
        <h6>What influenced your decision on whether a music item was popular or less popular?<br>Check all the options that apply.</h6>
        <div class="col-lg-12">
          <input type="hidden" name="artist" value="0">
          <input type="checkbox" name="artist" value="1">
          <label class="last-q">The popularity of the artist</label>
        </div>
        <div class="col-lg-12">
          <input type="hidden" name="song" value="0">
          <input type="checkbox" name="song" value="1">
          <label class="last-q">The popularity of the song</label>
        </div>
        <div class="col-lg-12">
          <input type="hidden" name="genre" value="0">
          <input type="checkbox" name="genre" value="1">
          <label class="last-q">The popularity of the genre</label>
        </div>
        <input class="btn btn-primary complete final-btn" type="submit" name="continue" value="Complete survey"/>
      </form>
    </div>
  </div>
</div>


<?php 

if (isset($_POST["continue"])) {
  $artist = $_POST['artist'];
  $song = $_POST['song'];
  $genre = $_POST['genre'];
  $username = $_SESSION['username'];

  $query = "UPDATE answers SET influence_popularity_artist = '$artist', influence_popularity_song = '$song', influence_popularity_genre = '$genre' WHERE participant = '$username'";
  $db->exec($query);
  header("Location: completion.php");
};


include "partials/footer.php";

?>