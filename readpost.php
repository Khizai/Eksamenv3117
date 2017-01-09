<?php
require_once('connect.php');

$statement = $DBH->prepare("SELECT * FROM articles ORDER BY articleid DESC");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

	$posttime = date("d-M-Y H:i", $row["time"]); ?>

	<article class="col-md-12 noGutter">
			<h3><?php echo $row["heading"]; ?></h3>
			<p><?php echo $row["user"]." ". $posttime; ?></p>
			<img class="img-responsive" src="<?php echo $row["imgurl"]; ?>" alt="<?php echo $row["imgalt"]; ?>">
			<p><?php echo $row["content"]; ?></p>
			<hr>
		</article>
		<?php
} ?>