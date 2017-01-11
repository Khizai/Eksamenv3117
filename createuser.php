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
    echo "Passwords matcher ikke";
    header("Refresh:3; url=reg.php");
  }
  else{
    $newpass = password_hash($newpass, PASSWORD_DEFAULT);
    require_once('connect.php');
    $newUser = $DBH->prepare("INSERT INTO users (dbUsername, dbPassword, dbLocation, dbPriv) VALUES ('$newuser', '$newpass', '$newemail', '1')");
    $newUser->execute();
    header('location: index.php');
  }
}
else {
  echo "Brugernavn allerede i brug";
  header("Refresh:3; url=reg.php");
}
?>
