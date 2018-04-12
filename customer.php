<html>

	<body>
		<form action="customeradded.php" method="post">
			<title> CUSTOMER </title>
			<body>
			<?php include ('navbar.php'); ?>
				
				<br>
				<br>
				<br>

				
				<table>

			<tr>
				<td>First Name</td>
				<td align="center", height="40"><input type="text" name="firstName" size="30" /></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td align="center", height="40"><input type="text" name="lastName" size="30" /> </td>
			</tr>

			<tr>
				<td>Email</td>
				<td align="center", height="40"><input type="text" name="email" size="30" /></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td align="center", height="40"><input type="text" name="contact" size="30" /> </td>
			</tr>
			<tr>
				<td> Address</td>
				<td align="center", height="40"><input type="text" name="address" size="30" /> </td>
			</tr>

			<tr>
				<td>Age</td>
				<td align="center", height="40"><input type="text" name="age" size="30" /></td>
			</tr>



			<tr>
				<td colspan="2" align="left"><input type="submit" name="submit" value="Submit"/></td>
			</tr>
		</table>
			
			</body>

		
		</form>

</body>
</html>
