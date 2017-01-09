<?php
$host = "localhost";
$dbName = "eksamen";
$dbUser = "root";
$dbPass = "";

try{
	$DBH = new PDO("mysql:dbname=$dbName;host=$host;charset=utf8", $dbUser, $dbPass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

	$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo "Noget gik galt!: <br>";
	echo $e->getmessage( );
}
?>