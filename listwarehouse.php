<html>
	<title>WAREHOUSE</title>
		<body>
		
<?php 
include ('navbar.php'); 
?>
		    
<br>
<br>
<br><div style="position: fixed; top: 550px; width:100%; height: 100px;">
 <input type="button" value="        Create          "  onclick="window.location.href='warehouse.php'" /> 
 <br>
 <Br>
  </div>

<?php



require_once('./mysqli_connect.php');

$query = 'SELECT warehouseID, warehouseName, warehouseLocation, contactNumber from warehouse';
$response = mysqli_query($dbc, $query);

if($response)
{
	echo '<table align = "center"
	cellspacing = "0" cellpadding ="20" border="5">
	
	<tr> 
	<td align="left"><b>Warehouse ID</b></td>
	<td align="left"><b>Warehouse Name</b></td>
	<td align="left"><b>Warehouse Location</b></td>
	<td align="left"><b>Contact</b></td>
	</tr>';
	
	while ($row = mysqli_fetch_assoc($response))
	{
		echo "<tr>
		<td>{$row['warehouseID']} </td>
		<td>{$row['warehouseName']} </td>
		<td>{$row['warehouseLocation']} </td>
		<td>{$row['contactNumber']} </td>
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