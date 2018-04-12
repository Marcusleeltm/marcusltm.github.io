<html>

	<body>
		<form action="warehouseadded.php" method="post">
			<title> WAREHOUSE </title>
			<body>
			<?php include ('navbar.php'); ?>
				<br>
				<br>
				<br>

				
				<table>
			<tr>
				<td>Warehouse Name</td>
				<td align="center", height="40"><input type="text" name="warehouseName" size="30" /> </td>
			</tr>

			<tr>
				<td>Warehouse Location</td>
				<td align="center", height="40"><input type="text" name="warehouseLocation" size="30" /></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td align="center", height="40"><input type="text" name="contact" size="30" /> </td>
			</tr>
			
			<tr>
				<td colspan="2" align="left"><input type="submit" name="submit" value="Submit"/></td>
			</tr>

		</table>
			
			</body>

		
		</form>

</body>
</html>
