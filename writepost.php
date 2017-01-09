<?php

$imgsrc = stripslashes(htmlspecialchars($_POST['imgsrc']));
$imgalt = stripslashes(htmlspecialchars($_POST['imgalt']));
$heading = stripslashes(htmlspecialchars($_POST['heading']));
$time = time();
$content = stripslashes($_POST['content']);

require_once('connect.php');

$writePost = $DBH->prepare("INSERT INTO articles (imgurl, imgalt, heading, time, content, user) VALUES ('img/$imgsrc', '$imgalt', '$heading', '$time', '$content', 'test')");

$writePost->execute();
header('Location: news.php');
?>