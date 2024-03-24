<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
	<style>
		table {
			margin: auto;
		}
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
		}
		th{
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<h1>Verified Suppliers</h1>
	<table>
		<tr>
			<th>Supplier ID</th>
			<th>Name</th>
			<th>Phone number</th>
			<th>Email</th>
			<th>Location</th>
            <th>Delete</th>
            <th>Update</th>
		</tr>
<?php
	include 'admindb.php';
	//read operation/select
	$sql = "SELECT * FROM supplier";
	//execute query
	$result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $supplier_id = $row['id'];
            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $location = $row['location'];
            echo "<tr>
            <td>$supplier_id</td>
            <td>$name</td>
            <td>$phone</td>
            <td>$email</td>
            <td>$location</td>
            <td><button><a href='delete.php?deleteid=$supplier_id'>Delete</a></button></td>
            <td><button><a href='update.php?updateid=$supplier_id'>Update</a></button></td>
            </tr>";
        }
?>
	</table>

</body>
</html>