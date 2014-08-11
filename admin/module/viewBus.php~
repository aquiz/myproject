
<header>
<link rel="stylesheet" href="../css/bootstrap.css"/>
</header>
<a href="addbus.php">Add bus</a>
<?php	


require_once("../conn/conn.php");
$query = "SELECT * FROM bus"; 
$result = mysql_query($query);

echo "<table class='table table-bordered'>"; // start a table tag in the HTML


echo"<br><tr>

<td>BUS_ID</td>
<td>SEATS</td>
<td>MODEL</td>

</tr>";

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results


echo "<tr><td>".$row['busID']."</td><td>".$row['seats']."</td><td>" . $row['model']."</td><td>[<a href='EditData.php?=$ID'>Edit</a> | <a href='DeleteBus.php'>Delete</a>]<br></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection
			
mysql_close();
?>
