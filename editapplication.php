<?php 
require_once 'core/dbConfig.php'; 
require_once 'core/models.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Application</title>
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
	<?php 
	// Get student by id using the GET parameter
	$getStudentById = getStudentById($pdo, $_GET['application_id']); 
	?>
	<form action="core/handleForms.php?application_id=<?php echo $_GET['application_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getStudentById['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getStudentById['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getStudentById['gender']; ?>">
		</p>
		<p>
			<label for="section">Section</label>
			<input type="text" name="section" value="<?php echo $getStudentById['section']; ?>">
		</p>
		<p>
			<label for="dreamJob">Dream Job</label>
			<input type="text" name="dreamJob" value="<?php echo $getStudentById['dream_job']; ?>"></p>
		<p>
			<label for="specialty">Specialty</label>
			<input type="text" name="specialty" value="<?php echo $getStudentById['specialty']; ?>">
			<!-- This button will submit to handleForms.php and update the student info -->
			<input type="submit" name="editStudentBtn" value="Update">
		</p>
	</form>
</body>
</html>
