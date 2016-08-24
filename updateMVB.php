<?php
include('connect-db.php');
    $pid = (int)$_POST["up_ID"];

	$p_name = mysql_real_escape_string($_POST["up_partnername"]);
    $f_name = mysql_real_escape_string($_POST["up_firstname"]);
    $l_name = mysql_real_escape_string($_POST["up_lastname"]);
    $title = mysql_real_escape_string($_POST["up_title"]);
    $phone = mysql_real_escape_string($_POST["up_phone"]);
	$email = mysql_real_escape_string($_POST["up_email"]);
	$strasse = mysql_real_escape_string($_POST["up_email"]);
	$city = mysql_real_escape_string($_POST["up_city"]);
	$zipcode = mysql_real_escape_string($_POST["up_zipcode"]);
	$iban = mysql_real_escape_string($_POST["up_iban"]);
	$password = mysql_real_escape_string($_POST["up_password"]);

	$query= mysql_query("UPDATE partners SET p_name='$p_name', strasse='$strasse', city='$city', zipcode='$zipcode', f_name='$f_name',l_name='$l_name', 
	title='$title', iban='$iban', phone='$phone', mail='$email', securitypassword='$password' WHERE pid='$pid'");

if(mysql_affected_rows()>=1)
	{
		header("location:viewMVB.php");
}else{
    echo "Error:".mysql_error();
}
?>