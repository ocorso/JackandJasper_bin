<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Jack &amp; Jasper Vineyards</title>
	<link rel="stylesheet" href="/css/main.css" type="text/css" media="screen" />
    <script src="/js/swfobject.js" type="text/javascript" charset="utf-8"></script> 
	<!--[if IE 6]><link rel="stylesheet" href="/css/main_ie6.css" type="text/css" media="screen" /><![endif]-->	
</head>
<?php require_once('../Connections/jackandjasper.php');
	if($_GET['id']){
			$id = $_GET['id'];}
		else{
			$id = 1;}
	if (!function_exists("GetSQLValueString")) {
		function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = ""){
				  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
				  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
				  switch ($theType) {
					case "text":
					  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
					  break;    
					case "long":
					case "int":
					  $theValue = ($theValue != "") ? intval($theValue) : "NULL";
					  break;
					case "double":
					  $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
					  break;
					case "date":
					  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
					  break;
					case "defined":
					  $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
					  break;
				  }//end switch
				  return $theValue;
		}//end function GetSQLValueString
	}//end if
	mysql_select_db($database_jackandjasper, $jackandjasper);
	$query_vineyardRS = "SELECT * FROM vineyards WHERE id=".$id;
	$vineyardRS = mysql_query($query_vineyardRS, $jackandjasper) or die(mysql_error());
	$row_vineyardRS = mysql_fetch_assoc($vineyardRS);
	$totalRows_vineyardRS = mysql_num_rows($vineyardRS);
?>
<body>
    <div id="wholewrapper">
    	<div id="flashHome">
            <div id="header">
                <img src="../img/header/default.jpg" alt="Harvest in the Jack &amp; Jasper Vineyards"/>			
                <? include("../php/mainnav.php"); ?>			
            </div>
            <div id="maincontentwrapper">
                <div id="leftcolumn">
                    <div id="leftsubnav">
                        <ul>
                            <li><a href="/pages/vineyards.php?id=1">Winemaking</a></li>
                          <li><a href="/pages/vineyards.php?id=2">La Encantada, Sta. Rita Hills</a></li>
                          <li><a href="/pages/vineyards.php?id=3">Split Rock</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                  <h1><? echo $row_vineyardRS['h1'];?>&nbsp;</h1>
                  <h2><? echo $row_vineyardRS['h2'];?></h2>
                  <p>&nbsp;</p>
                  <img  id="contentimage" src="/img/vineyards/<?php echo $row_vineyardRS['id'].".jpg";?>" />
                  <div id="vineyardcontent">
                    <p class="firstpara_after"><?php echo $row_vineyardRS['p']; ?></p>
                  </div>
                  <? if ($id ==1) {
                    echo "<p class=\"footnote\">Jack &amp; Jasper Pinot Nior ages for 12 months in oak barrels.</p>";
                   } ?>
                </div>			
                <div class="clr"></div>
            </div><!--end of maincontentwrapper-->
            <p><?php  include("../php/footer.php"); ?></p>
          <p>&nbsp;     </p>
          </div><!--end of flashHome-->
          <script type="text/javascript">
			var flashvars = {};
			var jsID = <? echo $id;?>;
			flashvars.id= jsID;
			flashvars.state = 'vineyards';
			var params = {wmode:'transparent'};
    		swfobject.embedSWF("../flash/jackandjasper.swf", "flashHome", "1004", "742", "9.0.0", false, flashvars, params);
    </script>
    </div> <!-- end of wholewrapper -->

</body>
</html>
<?php
mysql_free_result($vineyardRS);
?>