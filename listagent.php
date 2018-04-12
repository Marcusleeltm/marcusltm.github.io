<html>
	<title>AGENT</title>
		<body>

<?php 
include ('navbar.php'); 
?>   
		   
<br>
<br>
<br><div style="position: fixed; top: 550px; width:100%; height: 100px;">
 <input type="button" value="        Create          "  onclick="window.location.href='agent.php'" /> 
 <br>

 
</div>
<?php

require_once('./mysqli_connect.php');

$query = 'SELECT agentID, username, firstName, lastName, agentEmail, agentContact FROM agent';
$response = mysqli_query($dbc, $query);

if($response)
{
	echo '<table align = "center"
	cellspacing = "0" cellpadding ="20" border="5">
	
	<tr> 
	<td align="left"><b>Agent ID</b></td>
	<td align="left"><b>Username</b></td>
	<td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td>
	<td align="left"><b>Email</b></td>
	<td align="left"><b>Contact</b></td>
	</tr>';
	
	while ($row = mysqli_fetch_assoc($response))
	{
		echo "<tr>
		<td>{$row['agentID']} </td>
		<td>{$row['username']} </td>
		<td>{$row['firstName']} </td>
		<td>{$row['lastName']} </td>
		<td>{$row['agentEmail']} </td>
		<td>{$row['agentContact']} </td>
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