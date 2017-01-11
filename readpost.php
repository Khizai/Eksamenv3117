<?php
require_once('connect.php');

$statement = $DBH->prepare("SELECT * FROM articles ORDER BY articleid DESC");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
	
	$posttime = date("d-M-Y H:i", $row["time"]);
	//Tjekker om der er en bruger logget på
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$_SESSION['username'] = ucfirst($_SESSION['username']);
		if ($_SESSION['Permission'] == '3'){?>
		<article class="col-md-12 noGutter">
			<h3><?php echo $row["heading"]; ?></h3>
			<p class="postname"><?php echo $row["user"].", ".$row['location'].", ".$posttime; ?></p>
			<img class="img-responsive" src="<?php echo $row["imgurl"]; ?>" alt="<?php echo $row["imgalt"]; ?>">
			<p><?php echo $row["content"]; ?></p>
			<form action="deletepost.php" method="post">
				<input name="articleid" class="articleid" value="<?php echo $row["articleid"]; ?>" />
				<input type="submit" id="submit" value="delete"/>
			</form>
			<hr>
		</article>
		<?php } else if($_SESSION['Permission'] == '2'){ ?>
		<article class="col-md-12 noGutter">
			
			<h3><?php echo $row["heading"]; ?></h3>
			<p class="postname"><?php echo $row["user"].", ".$row['location'].", ".$posttime; ?></p>
			<img class="img-responsive" src="<?php echo $row["imgurl"]; ?>" alt="<?php echo $row["imgalt"]; ?>">
			<p><?php echo $row["content"]; ?></p>
			<?php if($row['user'] == $_SESSION['username']){ ?>
			<form action="deletepost.php" method="post">
				<input name="articleid" class="articleid" value="<?php echo $row["articleid"]; ?>" />
				<input type="submit" id="submit" value="delete"/>
			</form>
			<?php } ?>
			<hr>
		</article>
		<?php }
		else{ ?>
		<article class="col-md-12 noGutter">
			<h3><?php echo $row["heading"]; ?></h3>
			<p class="postname"><?php echo $row["user"].", ".$row['location'].", ".$posttime; ?></p>
			<img class="img-responsive" src="<?php echo $row["imgurl"]; ?>" alt="<?php echo $row["imgalt"]; ?>">
			<p><?php echo $row["content"]; ?></p>
			<hr>
		</article>
		<?php }
	}
	else{ ?>
	<article class="col-md-12 noGutter">
		<h3><?php echo $row["heading"]; ?></h3>
		<p class="postname"><?php echo $row["user"].", ".$row['location'].", ".$posttime; ?></p>
		<img class="img-responsive" src="<?php echo $row["imgurl"]; ?>" alt="<?php echo $row["imgalt"]; ?>">
		<p><?php echo $row["content"]; ?></p>
		<hr>
	</article>
	<?php
}


} ?>