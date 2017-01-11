<?php
require_once('connect.php');

$statement = $DBH->prepare("SELECT * FROM users");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ 
	?>
	<article class="col-xs-6 col-xs-offset-3 noGutter">
		<hr>
		<form class="form-horizontal col-xs-12" action="updateuser.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-4" for="updateid">Bruger Id:</label>
				<div class="col-sm-8">
					<input type="text" name="updateid" class="form-control" value="<?php echo $row["userid"]; ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="updateduser">Brugernavn:</label>
				<div class="col-sm-8">
					<input type="text" name="updateduser" class="form-control" id="newuser" value="<?php echo $row["dbUsername"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="updatedlocation">Placering:</label>
				<div class="col-sm-8">
					<input type="text" name="updatedlocation" class="form-control" id="updatedlocation" value="<?php echo $row["dbLocation"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="userlevel">admin niveau:</label>
				<div class="col-sm-8">
					<input type="text" name="userlevel" class="form-control" id="repass" value="<?php echo $row["dbPriv"]; ?>">
				</div>
			</div>
			<input class="btn btn-default pull-right" type="submit" id="submit" name="submit" value="Update" />
		</form>
		<hr class="container-fluid">
	</article>
	<?php 
} 
?>