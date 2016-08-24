<?php
include('connect-db.php');
$PID = (int)$_GET['pid'];
$query = mysql_query("SELECT * FROM partners WHERE pid = '$PID'") or die(mysql_error());

if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) {
        $partnername= $row['p_name'];
		$strasse = $row['strasse'];
		$city = $row['city'];
		$zipcode = $row['zipcode'];
		$firstname = $row['f_name'];
        $lastname = $row['l_name'];
		$title = $row['title'];
		$iban = $row['iban'];
        $phone = $row['phone'];
        $email = $row['mail'];
		$password = $row['securitypassword'];
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
<form action="updateMVB.php" method="post">
<input type="hidden" name="up_ID" value="<?=$PID;?>">
<strong>Partner Name: </strong> <input type="text" name="up_partnername" size="80" value="<?=$partnername;?>"><br><br>
<strong>First Name: </strong> <input type="text" name="up_firstname" size="30" value="<?=$firstname?>">
<strong>Last Name: </strong> <input type="text" name="up_lastname" size="30" value="<?=$lastname?>">
<strong>Title: </strong> <input type="text" name="up_title" size="10" value="<?=$title?>"><br><br>
<strong>Phone: </strong> <input type="text" name="up_phone" size="20" value="<?=$phone?>">
<strong>E-mail: </strong> <input type="text" name="up_email" size="40" value="<?=$email?>"><br><br>
<strong>Strasse: </strong> <input type="text" name="up_strasse" size="40" value="<?=$strasse?>">
<strong>City: </strong> <input type="text" name="up_city" size="20" value="<?=$city?>">
<strong>Zipcode: </strong> <input type="text" name="up_zipcode" size="10" value="<?=$zipcode?>"><br><br>
<strong>IBAN: </strong> <input type="text" name="up_iban" size="40" value="<?=$iban?>"><br><br>
<strong>Password: </strong> <input type="text" name="up_password" size="30" value="<?=$password?>"><br><br>
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
