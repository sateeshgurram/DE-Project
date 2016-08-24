# DE-Project<?php
define('db_name','marego');
define('db_user','root');
define('db_password','1234');
define('db_host','localhost');


$link = mysql_connect(db_host, db_user, db_password);

if (!$link){
	die('could not connect :'.mysql_error());
}
 $db_selected=mysql_select_db(db_name,$link);
 
 if(!$db_selected){
	 die('can;t use'.db_name.':'.mysql_error());
 }
 echo 'Connection to DB successful</br></br>';
 
 $partnername = $_POST['p_name'];
 $fname = $_POST['f_name'];
 $lname = $_POST['l_name'];
 $title = $_POST['title'];
 $phone = $_POST['phone'];
 $email = $_POST['mail'];
 $strasse = $_POST['strasse'];
 $city = $_POST['city'];
 $zipcode = $_POST['zipcode'];
 $iban=$_POST['iban'];

 $query = "INSERT INTO partners(p_name,strasse,city,zipcode,f_name,l_name,title,iban,phone,mail) VALUES ('$partnername','$strasse','$city','$zipcode','$fname','$lname','$title','$iban','$phone','$email')";
 
$result = mysql_query($query,$link);
 if (!$result)
 {
	die('Could not enter data: ' . mysql_error());
 }
 else
 {
	header("location:view.php");
	mysql_close($link);

 }

 header("refresh:15; url=test1.html"); 

?>
