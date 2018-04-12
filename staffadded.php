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
	
	
	if (empty($_POST['username']))
	{
		$data_missing[] = 'username';
	}
	else 
	{
		$user = trim($_POST['username']);
	}
	
	
	if (empty($_POST['password']))
	{
		$data_missing[] = 'password';
	}
	else 
	{
		$pass = $_POST['password'];
	}
	
	
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
		$l_name = trim($_POST['lastName']);
	}
	
	
	if (empty($_POST['email']))
	{
		$data_missing[] = 'staffEmail';
	}
	else 
	{
		$ema = trim($_POST['email']);
	}
	
	
	if (empty($_POST['contact']))
	{
		$data_missing[] = 'staffContact';
	}
	else 
	{
		$cont = trim($_POST['contact']);	
	}

	if (empty($data_missing))
	{
	require_once('./mysqli_connect.php');
	
	$query = "INSERT INTO staff(username,password,firstName,lastName,staffEmail,staffContact) values (?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($dbc, $query);
	mysqli_stmt_bind_param($stmt, "ssssss", $user, $pass, $f_name, $l_name, $ema, $cont);
	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows == 1)
	{
		echo 'Staff registered';
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);	
		echo '<br><br><a href="liststaff.php">Click here</a>';
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
