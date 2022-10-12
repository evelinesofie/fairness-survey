<?php
include "partials/header.php";

// Store username to prevent participating multiple times
$username = $_SESSION['username'];
$query = "INSERT INTO users (username) VALUES ('$username')";
$db->exec($query);

?>

<div id="progress">
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="100"
    aria-valuemin="0" aria-valuemax="100" style="width:100%">
    <span class="progress-bold">100%</span>
    </div>
  </div>
</div>

<div class="container" id="content">
  <div class="row">
    <div class="col-lg-6">
        <h1>Thank you for your participation!</h1>
        <p class="code-text">Here is your unique code for Amazon MTurk: <?php echo '<span class="bold">' . strtoupper(substr($id, 0, 7)) . '</span>'; ?></p>
    </div>
    <div class="col-lg-6">
      <img class="complete-img" src="img/completion-pink.svg"/>
    </div>
  </div>
</div>

<?php
include "partials/footer.php";
?>