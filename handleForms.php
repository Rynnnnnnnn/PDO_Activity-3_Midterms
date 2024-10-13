<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewStudentBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$section = trim($_POST['section']);
	$dream_job = trim($_POST['dream_job']);
	$specialty = trim($_POST['specialty']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($section)  && !empty($dream_job)  && !empty($specialty)) {
			$query = insertIntoStudentRecords($pdo, $firstName, $lastName, 
			$gender, $section, $dream_job, $specialty,);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editStudentBtn'])) {
	$application_id = $_GET['application_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$section = trim($_POST['section']);
	$dream_job = trim($_POST['dreamJob']);
	$specialty = trim($_POST['specialty']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($section)  && !empty($dream_job)  && !empty($specialty)) {
        $query = insertIntoStudentRecords($pdo, $firstName, $lastName, 
        $gender, $section, $dream_job, $specialty,);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





// Handle deleting a student
if (isset($_POST['deleteStudentBtn'])) {
    $application_id = $_GET['application_id']; // Get the application_id from the URL
    $query = deleteAStudent($pdo, $application_id); // Call the defined function

    if ($query) {
        header("Location: ../index.php");
        exit(); // Always call exit after a header redirect
    } else {
        echo "Deletion failed";
    }
}
?>



