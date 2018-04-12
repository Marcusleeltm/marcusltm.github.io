<html>
	<title> STAFF</title>
		<body>
		
<?php 
include ('navbar.php'); 
?>

<br>
<br>
<br><div style="position: fixed; top: 550px; width:100%; height: 100px;">
 <input type="button" value="        Create          "  onclick="window.location.href='staff.php'" /> </div>
 <br>
 <Br>
 

<?php



require_once('./mysqli_connect.php');

$query = 'SELECT staffID,username,firstName, lastName, staffEmail, staffContact FROM staff';
$response = mysqli_query($dbc, $query);

if($response)
{
	echo '<table align = "center"
	cellspacing = "0" cellpadding ="20" border="5">
	
	<tr> 
	<td align="left"><b>Staff ID</b></td>
	<td align="left"><b>Username</b></td>
	<td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td>
	<td align="left"><b>Email</b></td>
	<td align="left"><b>Contact</b></td>
	</tr>';
	
	while ($row = mysqli_fetch_assoc($response))
	{
		echo "<tr>
		<td>{$row['staffID']} </td>
		<td>{$row['username']} </td>
		<td>{$row['firstName']} </td>
		<td>{$row['lastName']} </td>
		<td>{$row['staffEmail']} </td>
		<td>{$row['staffContact']} </td>
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