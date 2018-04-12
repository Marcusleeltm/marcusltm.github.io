<html>
	<title>CARGO</title>
		<body>
		
<?php 
include ('navbar.php'); 
?>
		    
<br>
<br>
<br><div style="position: fixed; top: 550px; width:100%; height: 100px;">
 <input type="button" value="        Create          "  onclick="window.location.href='cargo.php'" /> 
 <br>
 <Br>
  </div>

<?php

require_once('./mysqli_connect.php');

$query = 'SELECT cargoID, volume, weight, warehouseID, customerID from cargo';
$response = mysqli_query($dbc, $query);

if($response)
{
	echo '<table align = "center"
	cellspacing = "0" cellpadding ="20" border="5">
	
	<tr> 
	<td align="left"><b>Cargo ID</b></td>
	<td align="left"><b>Volume</b></td>
	<td align="left"><b>Weight</b></td>
	<td align="left"><b>Warehouse ID</b></td>
	<td align="left"><b>CustomerID</b></td>
	</tr>';
	
	while ($row = mysqli_fetch_assoc($response))
	{
		echo "<tr>
		<td>{$row['cargoID']} </td>
		<td>{$row['volume']} </td>
		<td>{$row['weight']} </td>
		<td>{$row['warehouseID']} </td>
		<td>{$row['customerID']} </td>
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