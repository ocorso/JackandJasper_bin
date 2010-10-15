<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Jack &amp; Jasper</title>

	<!--[if IE 6]><link rel="stylesheet" href="/css/main_ie6.css" type="text/css" media="screen" /><![endif]-->
	<link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="http://www.jackandjasper.com/favicon.ico" rel=’shortcut icon’ type=’image/x-icon‘/>

	<script src="js/swfobject.js" type="text/javascript" charset="utf-8"></script>  
	
</head>

<body>
	<div id="wholewrapper">
		<div id="flashHome">	
			<div id="header">
				<!-- FLASH HEADER and NAV BEGIN HERE -->
				<img src="img/home_dep_top.jpg" alt="header photo"/>
              	<?php include($_SERVER['DOCUMENT_ROOT']."/php/mainnav.php"); ?>
			  	<!-- FLASH HEADER and NAV END HERE -->
            </div>
            
		  	<div id="maincontentwrapper">
				<img src="img/home_dep_low.jpg" alt="body photo" />	
            </div>
			
			  <?php  include($_SERVER['DOCUMENT_ROOT']."/php/footer.php"); ?>
			</div><!-- end of flashHome -->
        
		<script type="text/javascript">
			var flashvars = {};
			flashvars.id ='1';
			flashvars.state = 'home';
			var params = {wmode:'transparent'};
    		swfobject.embedSWF("flash/jackandjasper.swf", "flashHome", "1004", "742", "9.0.0", false, flashvars, params);
        </script>
	</div><!-- end of wholewrapper -->

</body>
</html>
