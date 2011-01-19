<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Jack &amp; Jasper  | People</title>
	<link rel="stylesheet" href="/css/main.css" type="text/css" media="screen" />
    <link href="http://www.jackandjasper.com/favicon.ico" rel=’shortcut icon’ type=’image/x-icon‘/>
    <script src="/js/swfobject.js" type="text/javascript" charset="utf-8"></script> 
	<!--[if IE 6]><link rel="stylesheet" href="/css/main_ie6.css" type="text/css" media="screen" /><![endif]-->
</head>

<?php require_once('../Connections/jackandjasper.php');
		if($_GET['id']){
			$id = $_GET['id'];}
		else{
			$id = 1;}
		if (!function_exists("GetSQLValueString")) {
			function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
			{
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
			  }
			  return $theValue;
			}
		}
		mysql_select_db($database_jackandjasper, $jackandjasper);
		$query_PeopleRS = "SELECT * FROM people WHERE id =".$id;
		$PeopleRS = mysql_query($query_PeopleRS, $jackandjasper) or die(mysql_error());
		$row_PeopleRS = mysql_fetch_assoc($PeopleRS);
		$totalRows_PeopleRS = mysql_num_rows($PeopleRS);
?>

<body>

<div id="wholewrapper">
<!--begin flashHome-->
	<div id="flashHome">	
		<div id="header">
			<img src="/img/header/people_hdr.jpg" alt="Harvest in the Jack &amp; Jasper Vineyards"/>			
			<? include("../php/mainnav.php"); ?>			
	    </div>
		
<div id="maincontentwrapper">
    <div id="leftcolumn">
      <div id="leftsubnav">
        <ul>
          <li><a href="/pages/people.php?id=1">John 'Jack' Walsh</a></li>
          <li><a href="/pages/people.php?id=2">Brendan Walsh</a></li>
          <li><a href="/pages/people.php?id=3">Derrick Walsh</a></li>
          <li><a href="/pages/people.php?id=4">Sean Walsh</a></li>
        </ul>
      </div>
    </div>
			
    <div id="content">
        <div id="contentpeople">
          <h1><?php echo $row_PeopleRS['h1']; ?></h1>
              <br />
              <h2><?php echo $row_PeopleRS['h2']; ?></h2>
              <br />
              <p><?php echo $row_PeopleRS['p']; ?></p>
        </div>
      <div>
	        <img  id="contentimage" src="/img/people/<?php echo $row_PeopleRS['id'].".jpg";?>" />
    	</div>
    </div>
      <div class="clr"></div>
      </div>		
       <?php  include("../php/footer.php"); ?><br/>
     
    </div>  <!--end flashHome-->
    
    <script type="text/javascript">
			var flashvars = {};
			var jsID = <? echo $id;?>;
			flashvars.id= jsID;
			flashvars.state = 'people';
			var params = {wmode:'transparent'};
    		swfobject.embedSWF("../flash/jackandjasper.swf", "flashHome", "1004", "742", "9.0.0", false, flashvars, params);
    </script>
 </div> <!-- end of wholewrapper -->

</body>
</html>
<?php
mysql_free_result($PeopleRS);
?>
