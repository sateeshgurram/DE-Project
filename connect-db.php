<?php

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
 #echo 'Connection to DB successful</br></br>';

?>
