<?php 
require_once 'core/dbConfig.php'; 
require_once 'core/models.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Application</title>
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
	<h1>Are you sure you want to delete this user?</h1>
	<?php 
	// Get student by id using the GET parameter
	$getStudentById = getStudentById($pdo, $_GET['application_id']); 
	?>
	<form action="core/handleForms.php?application_id=<?php echo $_GET['application_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; font-family: 'Arial';">
			<p>First Name: <?php echo $getStudentById['first_name']; ?></p>
			<p>Last Name: <?php echo $getStudentById['last_name']; ?></p>
			<p>Gender: <?php echo $getStudentById['gender']; ?></p>
			<p>Section: <?php echo $getStudentById['section']; ?></p>
			<p>Dream Job: <?php echo $getStudentById['dream_job']; ?></p>
			<p>Specialty: <?php echo $getStudentById['specialty']; ?></p>
			<!-- This button will submit to handleForms.php and delete the student -->
			<input type="submit" name="deleteStudentBtn" value="Delete">
		</div>
	</form>
</body>
</html>
