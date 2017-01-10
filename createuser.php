<?php
$newuser = stripslashes(htmlspecialchars($_POST['newuser']));
$newemail = stripslashes(htmlspecialchars($_POST['location']));
$newpass = stripslashes(htmlspecialchars($_POST['newpass']));
$repass = stripslashes(htmlspecialchars($_POST['repass']));


require_once('connect.php');

$statement = $DBH->prepare("SELECT * FROM users WHERE dbuserName='$newuser'");
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

if (empty($rows)) {
  if (!($newpass == $repass) ){
    echo "Passwords doesn't match";
    header("Refresh:3; url=reg.php");
  }
  else{
    require_once('connect.php');
    $newUser = $DBH->prepare("INSERT INTO users (dbUsername, dbPassword, dbLocation, dbPriv) VALUES ('$newuser', '$newpass', '$newemail', '1')");
    $newUser->execute();
    header('location: index.php');
  }
}
else {
  echo "User already exists";
  header("Refresh:3; url=reg.php");
}
?>
