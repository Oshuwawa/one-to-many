<?php 

require_once 'dbconfig.php'; 
require_once 'models.php';

if (isset($_POST['insertInstructorBtn'])) {

	$query = insertInstructor($pdo, $_POST['InstructorId'], $_POST['uName'], 
		$_POST['Qualification'], $_POST['Experience'], $_POST['ContactInfo']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Insertion failed";
	}

}


if (isset($_POST['editInstructorBtn'])) {
	$query = updateInstructor($pdo, $_POST['uName'], $_POST['Qualification'], 
    $_POST['Experience'], $_POST['ContactInfo'], $_GET['InstructorId']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Edit failed";;
	}

}




if (isset($_POST['deleteInstructorBtn'])) {
	$query = deleteinstructor($pdo, $_GET['InstructorId']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Deletion failed";
	}
}




if (isset($_POST['insertNewClassBtn'])) {
	$query = insertClass($pdo, $_POST['ClassId'], $_POST['ClassName'], $_POST['DayOfWeek'], $_POST['Time'], $_GET['InstructorId']);

	if ($query) {
		header("Location: ../viewprojects.php?InstructorId=" .$_GET['InstructorId']);
	}
	else {
		echo "Insertion failed";
	}
}




if (isset($_POST['editClassBtn'])) {
	$query = updateClass($pdo, $_POST['ClassName'], $_POST['DayOfWeek'], $_POST['Time'], $_POST['InstructorId'], $_GET['ClassId']);

	if ($query) {
		header("Location: ../viewprojects.php?InstructorId=" .$_GET['InstructorId']);
	}
	else {
		echo "Update failed";
	}

}




if (isset($_POST['deleteClassBtn'])) {
	$query = deleteClass($pdo, $_GET['ClassId']);

	if ($query) {
		header("Location: ../viewprojects.php?InstructorId=" .$_GET['InstructorId']);
	}
	else {
		echo "Deletion failed";
	}
}




?>