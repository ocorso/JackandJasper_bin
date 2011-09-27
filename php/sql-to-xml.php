<?php 
 include_once("cxn.inc");

 $cxn 		= new mysqli ($host, $user, $password, $dbname);
 if ($cxn->connect_error) die('Connect Error (' . $cxn->connect_errno . ') ' . $cnx->connect_error);
 $query		= 'SELECT * FROM '.$_POST["state"];
 $result 	= mysqli_query($cxn,  $query);
 echo "<?xml version=\"1.0\"?>\n\n";
 echo "<sections>\n\n";
 while($row = mysqli_fetch_array($result))
 {
 	echo "<section>\n<id>";
 	echo $row['id'];
 	echo "</id>\n<h1>";
 	echo $row['h1'];
 	echo "</h1>\n<h2>";
 	echo $row['h2'];
 	echo "</h2>\n<p>";
 	echo $row['p'];
 	echo "</p>\n</section>\n\n";
 }
 echo "</sections>";
 
 mysqli_close($cxn);
 
?>

