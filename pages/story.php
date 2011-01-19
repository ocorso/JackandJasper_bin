<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>Jack &amp; Jasper  |  Our Story</title>
        <link rel="stylesheet" href="/css/main.css" type="text/css" media="screen" />
        <link href="http://www.jackandjasper.com/favicon.ico" rel=’shortcut icon’ type=’image/x-icon‘/>
    	<script src="/js/swfobject.js" type="text/javascript" charset="utf-8"></script> 
        <!--[if IE 6]><link rel="stylesheet" href="/css/main_ie6.css" type="text/css" media="screen" /><![endif]-->
    </head>
	<?php
        require_once('../Connections/jackandjasper.php');
        //set get variable for section id
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
				  }//end switch
			  return $theValue;
			}//end GetSQLValueString function
        }//end if GetSQLValue String exist
        
        mysql_select_db($database_jackandjasper, $jackandjasper);
        $query_Story_RS = "SELECT * FROM story WHERE id=".$id;
        $Story_RS = mysql_query($query_Story_RS, $jackandjasper) or die(mysql_error());
        $row_Story_RS = mysql_fetch_assoc($Story_RS);
        $totalRows_Story_RS = mysql_num_rows($Story_RS);
    ?>
    <body>
        <div id="wholewrapper">	
        <!--begin flashHome-->
			<div id="flashHome">	
                <div id="header">
                    <img src="../img/header/default.jpg" alt="Harvest in the Jack &amp; Jasper Vineyards"/>			
                    <? include("../php/mainnav.php"); ?>                 
                </div>    
                <div id="maincontentwrapper">
                    <div id="leftcolumn">
                      <div id="leftsubnav">
                        <ul>
                            <li><a href="/pages/story.php?id=1">The History</a></li>
                            <li><a href="/pages/story.php?id=2">Jack's Quotes</a></li>
                            <li><a href="/pages/story.php?id=3">The Brothers</a></li>
                            <li><img src="/img/story/<?php echo $row_Story_RS['id'].".jpg";?>" /></li>
                        </ul>
                      </div>              
                    </div>
                    <div id="content">			
                        <div id="storycontent">
                          <h1><?php echo $row_Story_RS['h1']; ?></h1>
                          <h2>&nbsp;</h2>
                          <h2><?php echo $row_Story_RS['h2']; ?></h2>
                          <p>&nbsp;</p>
                          <p><?php echo $row_Story_RS['p']; ?></p>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
                <p><?php  include("../php/footer.php"); ?></p>
                <p>&nbsp;</p>
        	</div><!--end flashHome-->
	<script type="text/javascript">
			var flashvars = {};
			var jsID = <? echo $id;?>;
			flashvars.id= jsID;
			flashvars.state = 'story';
			var params = {wmode:'transparent'};
    		swfobject.embedSWF("../flash/jackandjasper.swf", "flashHome", "1004", "742", "9.0.0", false, flashvars, params);
    </script>
        </div> <!-- end of wholewrapper -->
    </body>
</html>
<?php mysql_free_result($Story_RS);?>