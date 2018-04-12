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
	
	
	
	if (empty($_POST['warehouseName']))
	{
		$data_missing[] = 'warehouseName';
	}
	else 
	{
		$w_name = $_POST['warehouseName'];
	}
	
	
	if (empty($_POST['warehouseLocation']))
	{
		$data_missing[] = 'warehouseLocation';
	}
	else 
	{
		$w_location = trim($_POST['warehouseLocation']);
	}
	
	
	if (empty($_POST['contact']))
	{
		$data_missing[] = 'contact';
	}
	else 
	{
		$contact = trim($_POST['contact']);
	}
	

	if (empty($data_missing))
	{
	require_once('./mysqli_connect.php');
	
	$query = "INSERT INTO warehouse(warehouseName, warehouseLocation,contactNumber) values (?, ?, ?)";
	$stmt = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param($stmt, "ssi", $w_name, $w_location, $contact);
	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows == 1)
	{
		echo 'Warehouse registered';
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);	
		echo '<br><br><a href="listwarehouse.php">Click here</a>';
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
