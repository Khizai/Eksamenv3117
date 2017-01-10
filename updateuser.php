<?php
$updateduser = stripslashes(htmlspecialchars($_POST['updateduser']));
$updatedlocation = stripslashes($_POST['updatedlocation']);
$updatedpass = stripslashes(htmlspecialchars($_POST['updatedpass']));
$userlevel = stripslashes(htmlspecialchars($_POST['userlevel']));
$updateid = $_POST['updateid'];

require_once('connect.php');

$updateUser = $DBH->prepare("UPDATE users SET dbUsername = '$updateduser', dbLocation='$updatedlocation', dbPassword='$updatedpass', dbPriv='$userlevel' WHERE userid='$updateid'");
$updateUser->execute();
header('location: admin.php');

?>
