<html>
	<title> CUSTOMER </title>
		<body>
		
<?php 
include ('navbar.php'); 
?>
		   
<br>
<br>
<br> <div style="position: fixed; top: 550px; width:100%; height: 100px;">
 <input type="button" value="        Create          "  onclick="window.location.href='customer.php'" /> 
 <br>
 <Br>
 </div>

<?php


require_once('./mysqli_connect.php');

$query = 'SELECT customerID, firstName, lastName, customerEmail, customerContact, address, age FROM customer';
$response = mysqli_query($dbc, $query);

if($response)
{
	echo '<table align = "center"
	cellspacing = "0" cellpadding ="20" border="5">
	
	<tr> 
	<td align="left"><b>Customer ID</b></td>
	<td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td>
	<td align="left"><b>Email</b></td>
	<td align="left"><b>Contact</b></td>
	<td align="left"><b>Address</b></td>
	<td align="left"><b>Age</b></td>
	</tr>';
	
	while ($row = mysqli_fetch_assoc($response))
	{
		echo "<tr>
		<td>{$row['customerID']} </td>
		<td>{$row['firstName']} </td>
		<td>{$row['lastName']} </td>
		<td>{$row['customerEmail']} </td>
		<td>{$row['customerContact']} </td>
		<td>{$row['address']} </td>
		<td>{$row['age']} </td>
		<tr>";
	}
	
	echo '</table>';

}

else
{
	echo "could issue database query <br />";
	
	//echo mysql_error($dbc);
	
}

//mysql_close($dbc);




?>


</body>
</html>