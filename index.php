<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Student Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="section">Section</label> <input type="text" name="section"></p>
		<p><label for="dream_job">Dream Job</label> <input type="text" name="dream_job"></p>
		<p><label for="specialty">Specialty</label> <input type="text" name="specialty">
			<input type="submit" name="insertNewStudentBtn">
		</p>
	</form>
	<a href="testGetVariable.php?studentName=KryslerMartinez&yearLevel=ThirdYear">The Creator</a>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Application ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Section</th>
	    <th>Dream Job</th>
	    <th>Specialty</th>
		<th>Actions</th>
	  </tr>

	  <?php $seeAllStudentRecords = seeAllStudentRecords($pdo); ?>
	  <?php foreach ($seeAllStudentRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['application_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['section']; ?></td>
	  	<td><?php echo $row['dream_job']; ?></td>
	  	<td><?php echo $row['specialty']; ?></td>
	  	<td>
	  		<a href="editapplication.php?application_id=<?php echo $row['application_id'];?>">Edit</a>
	  		<a href="deleteapplication.php?application_id=<?php echo $row['application_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>
