<?php
 include_once("cxn.inc");
 
 $cxn = mysqli_connect($host, $user, $password, $dbname);
 
 //asign the data passed from Flex to variables

$username = mysqli_real_escape_string($cxn, $_POST["username"]);
$password = mysqli_real_escape_string($cxn, $_POST["password"]);

//Query the database to see if the given username/password combination is valid.

$query = "SELECT * FROM User WHERE loginName = '$username' AND password = '$password'";
$result = mysqli_fetch_array(mysqli_query($cxn, $query));


//start outputting the XML

$output = "<loginsuccess>";

//if the query returned true, the output <loginsuccess>yes</loginsuccess> else output <loginsuccess>no</loginsuccess>

if(!$result)

{

$output .= "no";		

}else{

$output .= "yes";	

}

$output .= "</loginsuccess>";

//output all the XML

$output .="<resultValue>".$result."</resultValue>";
print ($output);
 mysqli_close($cxn);
?>

