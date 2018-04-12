<html>

	<body>
		<form action="scheduleadded.php" method="post">
			<title> Schedule </title>
			<body>
			<?php include ('navbar.php'); ?>
				
				<br>
				<br>
				<br>

				
				<table>

			<tr>
				<td>Schedule Name</td>
				<td align="center", height="40"><input type="text" name="scheduleName" size="30" /> </td>
			</tr>

			<tr>
				<td>Route</td>
				<td align="center", height="40"><input type="text" name="scheduleRoute" size="30" /></td>
			</tr>
			
			<tr>
				<td>Departure</td>
				<td align="center", height="40"><input type="date" name="scheduleDeparture" size="30" /> </td>
			</tr>

			<tr>
				<td>Arrival</td>
				<td align="center", height="40"><input type="date" name="scheduleArrival" size="30" /></td>
			</tr>
			<tr>
				<td>Available Space</td>
				<td align="center", height="40"><input type="text" name="spaceAvailability" size="30" /> </td>
			</tr>



			<tr>
				<td colspan="2" align="left"><input type="submit" name="submit" value="Submit"/></td>
			</tr>
		</table>
			
			</body>

		
		</form>

</body>
</html>
