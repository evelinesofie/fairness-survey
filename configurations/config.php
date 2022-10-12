<?php 

$db = new SQLite3('results.db');

session_set_cookie_params(3600);
session_start();

$id = session_id();

ob_start();

// Insert current page into db
$page = basename($_SERVER['PHP_SELF']);
$q = "INSERT INTO last_visited_page (participant) VALUES ('$id')";
$db->exec($q);

if ($page != 'index.php') {
    $q2 = "UPDATE last_visited_page SET page = '$page' WHERE participant = '$id'";
    $db->exec($q2);
}

?>