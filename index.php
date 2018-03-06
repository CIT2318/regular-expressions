<!DOCTYPE HTML>
<html>
<head>
<title>Regular Expressions</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>

<?php
//Q1
$input = "Change this to get a match";
$pattern = "/^([DM]r|Mrs|Miss|Ms)\.?$/i";

//Q2
//$pattern = "/^(U|u)[0-9]{7}$/";
//Q3
//$pattern = "/^[A-Z][A-Z]?[0-9]{1,2} ?[0-9][A-Z]{1,2}$/";
//Q4
//$pattern = "/^(https?:\/\/)?www\.([a-z0-9-\.]*)\.uk?$/";
//Q5
//Can you write a pattern that test for a valid assignment grade (A,B,D-,E+ etc.)


if(preg_match($pattern, $input))
{
	echo "Got a match";
}else{
	echo "No match";
}


?>
</body>
</html>
