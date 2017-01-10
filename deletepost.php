<?php
session_start();
$id = $_POST['articleid'];

require_once('connect.php');

$writePost = $DBH->prepare("DELETE FROM articles WHERE articleid='$id'");

$writePost->execute();
header("location: news.php");

?>
