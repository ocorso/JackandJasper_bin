<?php
 error_reporting(0);
 include_once("cxn.inc");
 $cxn = mysqli_connect($host, $user, $password, $dbname);
 
 $stateArray = array ("people", "story", "vineyards");
 $dbXML = "<root>\n";
 foreach ($stateArray as $currentTable){
	$query = "SELECT * FROM ".$currentTable;
	$result = mysqli_query($cxn, $query);

	//start parsing each table onto the tableElement local variable
	$table = "<".$currentTable." label=\"".$currentTable."\">\n";
	   while($row = mysqli_fetch_array($result))
	 {
 		$tableElement="<section label=\"".$row['h1']."\">\n";
 			$tableElement.="<h1 id=\"".$row['id']."\" table=\"".$currentTable."\" column=\"h1\" label=\"Heading\" value=\"".$row['h1']."\"/>\n";
 			$tableElement.="<h2 id=\"".$row['id']."\" table=\"".$currentTable."\" column=\"h2\" label=\"Sub-Heading\" value=\"".$row['h2']."\"/>\n";
 			$tableElement.="<p id=\"".$row['id']."\" table=\"".$currentTable."\" column=\"p\" label=\"Content\" value=\"".$row['p']."\"/>\n";
		 	if($currentTable=="news"){
		 		$tableElement.="<createDate id=\"".$row['id']."\" table=\"".$currentTable."\" column=\"createDate\" label=\"date\" value=\"".$row['createDate']."\"/>\n";
	 	}//end if we're in news
	 	$tableElement.="</section>\n";
		$table.=$tableElement;
	 }//end while we're looping through current table
	$table.="</".$currentTable.">\n";
	 
	$dbXML.=$table;
 
 }//end foreach
 $dbXML.="</root>";
 echo $dbXML;
 
 mysqli_close($cxn);
 
?>

