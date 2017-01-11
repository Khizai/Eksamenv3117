<?php

$userName = stripslashes(htmlspecialchars($_POST['username']));
$passWord = stripslashes(htmlspecialchars($_POST['password']));

require_once('connect.php');

$statement = $DBH->prepare("SELECT * FROM users WHERE dbuserName='$userName'");
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

if (empty($rows)) {
	echo "Kan ikke finde bruger!";
	header("Refresh:3; url=index.php");
}
else {
	foreach ($rows as $row) {
		$hash = $row['dbPassword'];
		// if ($passWord == $row['dbPassword']) {
		if (password_verify($passWord, $hash)){
			echo "Success";
			session_start();
			$_SESSION['username'] = $userName;
			$_SESSION['location'] = $row['dbLocation'];
			$_SESSION['Permission'] = $row['dbPriv'];
			header("location: index.php");
		}
		else{
			echo "Password is incorrect!";
			header("Refresh:3; url=index.php");
		}
	}
}
?>