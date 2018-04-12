<html>

	<body>
		<form action="agentadded.php" method="post">
			<title> AGENT </title>
			<body>
			<?php include ('navbar.php'); ?>
				
				<br>
				<br>
				<br>
				<div style="margin-top: 100px;">

				
				<table>


			<tr>
				<td>Username</td>
				<td align="center", height="40"><input type="text" name="username" size="30" value= "" /></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td align="center", height="40"><input type="password" name="password" size="30" value= ""/> </td>
			</tr>

			<tr>
				<td>First Name</td>
				<td align="center", height="40"><input type="text" name="firstName" size="30" value= ""/></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td align="center", height="40"><input type="text" name="lastName" size="30" value= ""/> </td>
			</tr>

			<tr>
				<td>Agent Email</td>
				<td align="center", height="40"><input type="text" name="email" size="30" value= ""/></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td align="center", height="40"><input type="text" name="contact" size="30" value= ""/> </td>
			</tr>



			<tr>
				<td colspan="2" align="left"><input type="submit" name="submit" value="submit"/></td>
			</tr>
		</table>
			
			</body>

		
		</form>
		


</body>
</html>


