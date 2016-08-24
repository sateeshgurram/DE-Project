
<html>
<head>
<title>View Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<div id="container">
	<div id="header">
			<img src="https://www.nasa.de/fileadmin/content/02_verkehr_planung/05_tarife/img/Logo_marego_print.jpg" alt="" align="right" width="200" height="100">
			<br><br><br>
	</div>
<h2 style="text-align:left;">View Details</h2><hr>



<?php
// connect to the database
include('connect-db.php');
#$username=$_GET['user']

// get the records from the database
if ($result = mysql_query("SELECT * FROM partners WHERE pid=7"))
	{
// display records if there are records to display
		if ($result and mysql_num_rows($result) > 0)
			{
				// display records in a table
				echo "<table border='1' cellpadding='10'>";

				// set table headers
				echo "<tr><th>ID</th><th>Partner Name</th><th>Strasse</th><th>City</th><th>Zipcode</th><th>Firstname</th><th>Lastname</th><th>Title</th><th>IBAN</th><th>Phone</th><th>E-mail</th></tr>";

				while ($row = mysql_fetch_object($result))
					{
					// set up a row for each record
						echo "<tr>";
						echo "<td>" . $row->pid . "</td>";
						echo "<td>" . $row->p_name . "</td>";
						echo "<td>" . $row->strasse . "</td>";
						echo "<td>" . $row->city . "</td>";
						echo "<td>" . $row->zipcode . "</td>";
						echo "<td>" . $row->f_name . "</td>";
						echo "<td>" . $row->l_name . "</td>";
						echo "<td>" . $row->title . "</td>";
						echo "<td>" . $row->iban . "</td>";
						echo "<td>" . $row->phone . "</td>";
						echo "<td>" . $row->mail . "</td>";
						echo "<td><a href='EditMVB.php?pid=" . $row->pid . "'>Edit</a></td>";

						echo "</tr>";
					}

				echo "</table>";
			}
				// if there are no records in the database, display an alert message
		else
			{
				echo "No results to display!";
			}
	}
// show an error if there is an issue with the database query
else
	{
		echo "Error: " . mysql_error();
	}

// close database connection

mysql_close($link);

?>
<br><br>
<FORM action="MVB.html"><input Type="submit" value="Home">
</body>
<br><br><br><br><br><br><br><br><br><br><br><img src="Capture.JPG" align="bottom" width="1350" height="129">
</html>