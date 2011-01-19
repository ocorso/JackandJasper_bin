<?php
 error_reporting(0);
 include_once("cxn.inc");
 $cxn = mysqli_connect($host, $user, $password, $dbname);
 $table = $_POST['table'];
 $column = $_POST['column'];
 $id = $_POST['id'];
 $value = $_POST['content'];
 $query = "UPDATE ".$table." SET ".$column." = '".$value."' WHERE id = '".$id."'";
 mysqli_query($cxn, $query) or die ("Couldn't Execute Query because: ".mysqli_error($cxn));
 $stateArray = array ("people", "story", "vineyards"); 
?>
<root>
<?php
	//start parsing each table onto the tableElement local variable 
	foreach ($stateArray as $currentTable): 
	$query = "SELECT * FROM $currentTable";
	$result = mysqli_query($cxn, $query);
?>
	<<?=$currentTable;?> label="<?=$currentTable; ?>">
<?php	   while($row = mysqli_fetch_array($result)): ?>	 
		<section label="<?= $row['h1']; ?>">
 			<h1 id="<?=$row['id']; ?>" table="<?=$currentTable; ?>" column="h1" label="Heading" value="<?=$row['h1']; ?>"/>
 			<h2 id="<?=$row['id']; ?>" table="<?=$currentTable; ?>" column="h2" label="Sub-Heading" value="<?=$row['h2']; ?>"/>
 			<p id="<?=$row['id']; ?>" table="<?=$currentTable; ?>" column="p" label="Content" value="<?=$row['p']; ?>"/>
 		</section>
<?php endwhile; ?>
</<?= $currentTable; ?>>
<?php endforeach; ?>
</root>

<?php mysqli_close($cxn); ?>

