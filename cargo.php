<html>

	<body>
		<form action="cargoadded.php" method="post">
			<title> CARGO </title>
			<body>
			<?php include ('navbar.php'); ?>
				<br>
				<br>
				<br>

				<center>
				<table>


			<tr>
				<td>Volume</td>
				<td align="center", height="40"><input type="text" name="volume" size="30" /> </td>
			</tr>

			<tr>
				<td>Weight</td>
				<td align="center", height="40"><input type="text" name="weight" size="30" /></td>
			</tr>
			<tr>
				<td>Warehouse ID</td>
				<td align="center", height="40"><input type="text" name="warehouseId" size="30" /> </td>
			</tr>
			<tr>
				<td>Customer ID</td>
				<td align="center", height="40"><input type="text" name="customerID" size="30" /> </td>
			</tr>



			<tr>
				<td colspan="2" align="left"><input type="submit" name="submit" value="Submit"/></td>
			</tr>
		</table></center>
			
			</body>

		
		</form>

</body>
</html>
