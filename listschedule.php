<html>
	<title>Schedule</title>
		<body>
		
<?php 
include ('navbar.php'); 
?>
		    
<br>
<br>
<br><div style="position: fixed; top: 550px; width:100%; height: 100px;">
 <input type="button" value="        Create          "  onclick="window.location.href='schedule.php'" /> 
 <br>
 <Br>
  </div>

<?php



require_once('./mysqli_connect.php');

$query = 'SELECT scheduleName, scheduleRoute, scheduleDeparture, scheduleArrival, spaceAvailability from schedule';
$response = mysqli_query($dbc, $query);

if($response)
{
	echo '<table align = "center"
	cellspacing = "0" cellpadding ="20" border="5">
	
	<tr> 
	<td align="left"><b>Schedule Name</b></td>
	<td align="left"><b>Route</b></td>
	<td align="left"><b>Departure</b></td>
	<td align="left"><b>Arrival</b></td>
	<td align="left"><b>Available Space</b></td>
	</tr>';
	
	while ($row = mysqli_fetch_assoc($response))
	{
		echo "<tr>
		<td>{$row['scheduleName']} </td>
		<td>{$row['scheduleRoute']} </td>
		<td>{$row['scheduleDeparture']} </td>
		<td>{$row['scheduleArrival']} </td>
		<td>{$row['spaceAvailability']} </td>
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
