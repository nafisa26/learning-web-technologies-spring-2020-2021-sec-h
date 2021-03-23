<!DOCTYPE html>
<html>
<head>
	<title>View Users</title>
</head>
<body>
	<table align="center" border="1">
		<tr>
			<td align="center" colspan="4">Users</td>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>USER TYPE</th>
		</tr>
		<?php
		require_once('../model/database.php');
		$conn = getConnection();
		$sql = "select * from users";
		$data = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($data);
		$result = mysqli_fetch_assoc($data);
		if($row!=0){
			while(mysqli_fetch_assoc($data)){
				echo "
				<tr>
					<td>{$result['id']}</td>
					<td>{$result['name']}</td>
					<td>{$result['email']}</td>
					<td>{$result['user_type']}</td>
				</tr>";
									}
								}
								?>
		<tr>
			<td align="right" colspan="4">
				<a href="home.php">Go Home</a>
			</td>

									
				</tr>
	</table>
</body>
</html>