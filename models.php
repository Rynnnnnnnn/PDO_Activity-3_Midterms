<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoStudentRecords($pdo, $first_name, $last_name, $gender, $section, $dream_job, $specialty) {

    // Correct the number of placeholders to match the columns and values
    $sql = "INSERT INTO student_records (first_name, last_name, gender, section, dream_job, specialty) VALUES (?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    // Execute the statement with the correct number of parameters
    $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $section, $dream_job, $specialty]);

    if ($executeQuery) {
        return true;
    }
}


function seeAllStudentRecords($pdo) {
	$sql = "SELECT * FROM student_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getStudentByID($pdo, $application_id) {
	$sql = "SELECT * FROM student_records WHERE application_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$application_id])) {
		return $stmt->fetch();
	}
}

function updateAStudent($pdo, $application_id, $first_name, $last_name, 
	$gender, $section, $dream_job, $specialty) {

	$sql = "UPDATE student_records 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?,  
					section = ?, 
					dream_job = ?, 
					specialty = ? 
			WHERE application_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $section, $dream_job, $specialty, $application_id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteAStudent($pdo, $application_id) {
    $sql = "DELETE FROM student_records WHERE application_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$application_id]);
}






?>
