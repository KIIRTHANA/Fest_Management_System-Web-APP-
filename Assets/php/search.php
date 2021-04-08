<!DOCTYPE html>
<html>
<head>
    <title>Registrations</title>
    <link rel="stylesheet" href="css1.css">
    <style>
    	th, td{
    		padding: 7px;
    	}
    </style>
</head>
<body>
	<header><h1 id="main">~ Plethora ~</h1></header>
<table border="4px" align="center" bgcolor="maroon" style="color: white; border-color: white; margin-left: 200px; text-align: center;">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Registration Number</th>
		<th>University</th>
		<th>Email</th>
		<th>phone</th>
		<th>city</th>
		<th>Event</th>
		<th>S.no</th>
	</tr>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "plethora");
		if($conn-> connect_error){
		die("Connection Failed :". $conn-> connect_error);
		}
		$reg=$_POST['regs'];
		$sql = "select * from registrations where reg='$reg'";
		$result=$conn-> query($sql);
		if($result-> num_rows > 0){
			while($row=$result-> fetch_assoc()){
				echo "<tr><td>". $row["first"]."<td>".$row["last"]."<td>".$row["reg"]."<td>".$row["university"]."<td>".$row["email"]."<td>".$row["phone"]."<td>".$row["city"]."<td>".$row["events"]."<td>".$row["participant_no"]."</td></tr>";
			}
		echo "</td>";
		}
		else{
			echo "0 result";
		}
		$conn-> close();
	?>
</table>	
</body>
</html>