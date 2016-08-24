<?php
include('connect-db.php');

$TID = (int)$_GET['tid'];
$query = mysql_query("SELECT * FROM tickets WHERE tid = '$TID'") or die(mysql_error());

if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) 
	{
		$tname = $row['tname'];
    }
?>
<html>
<body>
<div id="container">
	<div id="header">
			<img src="https://www.nasa.de/fileadmin/content/02_verkehr_planung/05_tarife/img/Logo_marego_print.jpg" alt="" align="right" width="200" height="100">
			<br><br><br>
	</div>
<h2 style="text-align:left;">Edit Details</h2><hr>
<form action="updateTICKET.php" method="post">
<input type="hidden" name="up_ID" value="<?=$TID;?>">
<strong>Ticket Name: </strong> <input type="text" name="up_ticketname" size="50" value="<?=$tname;?>"><br><br>
<input type="Submit">
</form>
</body>
<br><br><br><br><br><br><img src="Capture.JPG" align="bottom" width="1350" height="129">
</html>
<?php
}else{
    echo 'No entry found';
}
?>
