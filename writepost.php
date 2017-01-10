<?php
session_start();
$imgsrc = stripslashes(htmlspecialchars($_POST['imgsrc']));
$imgalt = stripslashes(htmlspecialchars($_POST['imgalt']));
$heading = stripslashes(htmlspecialchars($_POST['heading']));
$time = time();
$content = stripslashes($_POST['content']);
$currentuser = $_SESSION['username'];
$location = $_SESSION['location'];

require_once('connect.php');

$writePost = $DBH->prepare("INSERT INTO articles (imgurl, imgalt, heading, time, content, user, location) VALUES ('img/$imgsrc', '$imgalt', '$heading', '$time', '$content', '$currentuser', '$location')");

$writePost->execute();
header('Location: news.php');
?>