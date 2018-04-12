<html>
<head>
<title>
</title>
</head>
<body>


<?php


if (isset($_POST["submit"]))
{
	$data_missing = array();
	
	
	if (empty($_POST['volume']))
	{
		$data_missing[] = 'volume';
	}
	else 
	{
		$volume = trim($_POST['volume']);
	}
	
	
	if (empty($_POST['weight']))
	{
		$data_missing[] = 'weight';
	}
	else 
	{
		$weight = $_POST['weight'];
	}
	
	
	if (empty($_POST['warehouseId']))
	{
		$data_missing[] = 'warehouseID';
	}
	else 
	{
		$w_id = trim($_POST['warehouseId']);
	}
	
	
	if (empty($_POST['customerID']))
	{
		$data_missing[] = 'customerID';
	}
	else 
	{
		$c_id = trim($_POST['customerID']);
	}
	
	
	if (empty($data_missing))
	{
	require_once('./mysqli_connect.php');
	
	$query = "INSERT INTO cargo(volume,weight,warehouseID,customerID) values (?, ?, ?, ?)";
	$stmt = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param($stmt, "iiii", $volume, $weight, $w_id, $c_id);
	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows == 1)
	{
		echo 'Cargo Created';
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);	
		echo '<br><br><a href="listcargo.php">Click here</a>';
	}
	else
	{
		echo 'Error Occured <br />';
		echo mysqli_error();
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);	
	}
	}
	else 
	{
		echo 'You need to enter the following data <br /> ';
		foreach($data_missing as $missing)
		{
			echo "$missing <br />";
		}
	}
}

?>


</body>
</html>
