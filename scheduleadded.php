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
	
	
	if (empty($_POST['scheduleName']))
	{
		$data_missing[] = 'scheduleName';
	}
	else 
	{
		$s_name = trim($_POST['scheduleName']);
	}
	
	
	if (empty($_POST['scheduleRoute']))
	{
		$data_missing[] = 'scheduleRoute';
	}
	else 
	{
		$s_route = $_POST['scheduleRoute'];
	}
	
	
	if (empty($_POST['scheduleDeparture']))
	{
		$data_missing[] = 'scheduleDeparture';
	}
	else 
	{
		$s_departure= trim($_POST['scheduleDeparture']);
	}
	
	
	if (empty($_POST['scheduleArrival']))
	{
		$data_missing[] = 'scheduleArrival';
	}
	else 
	{
		$s_arrival = trim($_POST['scheduleArrival']);
	}
	
	
	if (empty($_POST['spaceAvailability']))
	{
		$data_missing[] = 'spaceAvailability';
	}
	else 
	{
		$space = trim($_POST['spaceAvailability']);
	}
	

	if (empty($data_missing))
	{
	require_once('./mysqli_connect.php');
	
	$query = "INSERT INTO schedule (scheduleName, scheduleRoute, scheduleDeparture, scheduleArrival,spaceAvailability) values (?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param($stmt, "ssdds", $s_name, $s_route, $s_departure, $s_arrival, $space);
	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows == 1)
	{
		echo 'Schedule created';
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);	
		echo '<br><br><a href="listshipment.php">Click here</a>';
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
