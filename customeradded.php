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
	
	
	if (empty($_POST['firstName']))
	{
		$data_missing[] = 'firstName';
	}
	else 
	{
		$f_name = trim($_POST['firstName']);
	}
	
	
	if (empty($_POST['lastName']))
	{
		$data_missing[] = 'lastName';
	}
	else 
	{
		$l_name = $_POST['lastName'];
	}
	
	
	if (empty($_POST['email']))
	{
		$data_missing[] = 'customerEmail';
	}
	else 
	{
		$ema = trim($_POST['email']);
	}
	
	
	if (empty($_POST['contact']))
	{
		$data_missing[] = 'customerContact';
	}
	else 
	{
		$cont = trim($_POST['contact']);	
	}
	
		if (empty($_POST['address']))
	{
		$data_missing[] = 'address';
	}
	else 
	{
		$address = trim($_POST['address']);	
	}
	
		if (empty($_POST['age']))
	{
		$data_missing[] = 'age';
	}
	else 
	{
		$age = trim($_POST['age']);	
	}

	if (empty($data_missing))
	{
	require_once('./mysqli_connect.php');
	
	$query = "INSERT INTO customer(firstName,lastName,customerEmail,customerContact,address,age) values (?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param($stmt, "sssssi",$f_name, $l_name, $ema, $cont, $address, $age);
	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows == 1)
	{
		echo 'Customer registered';
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);	
		echo '<br><br><a href="listcustomer.php">Click here</a>';
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
