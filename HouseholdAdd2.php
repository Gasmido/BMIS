<?php 

if (isset($_POST['submit'])) {
	$houseno = $_POST['houseno'];
	$st = $_POST['st'];
	$prk = $_POST['prk'];
	$datereg = $_POST['datereg'];
	$inhNo = count($_POST['inhabitant']);
	$inh = $_POST['inhabitant'];
	$brgy = "Ayos Lomboy";
	$Munici = "Guimba";
	$prv = "Nueva Ecija";

	require_once 'db_conn.php';
	require_once 'func.php';

	// Check for duplicate house number
	if (duplicatehouseno($connn, $houseno) !== false) {
		session_start();
		$_SESSION["sta"] = "House No. Already Exists!";
		header("location: Householdadd");
		exit();
	}

	// Check for duplicate inhabitants in other households
	if (checkDuplicateInhabitants($connn, $inh) !== false) {
		session_start();
		$_SESSION["stas"] = "Inhabitant is found in another household";
		header("location: Householdadd");
		exit();
	}

	// Add household if no duplicates are found
	addHousehold($connn, $houseno, $st, $prk, $datereg, $Munici, $brgy, $prv, $inhNo, $inh);
} else {
	header("Location: Householdadd");
	exit();
}

// Function to check for duplicate inhabitants in household2
function checkDuplicateInhabitants($connn, $inh) {
	$sql = "SELECT Inhabitants FROM household2 WHERE Inhabitants = ?";
	$stmt = mysqli_stmt_init($connn);

	foreach ($inh as $inhabitant) {
		if (mysqli_stmt_prepare($stmt, $sql)) {
			mysqli_stmt_bind_param($stmt, "s", $inhabitant);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			if (mysqli_fetch_assoc($result)) {
				// Duplicate found
				mysqli_stmt_close($stmt);
				return true;
			}
		} else {
			// SQL statement preparation failed
			header("location: sign_up?error=stmtfailed");
			exit();
		}
	}
	mysqli_stmt_close($stmt);
	return false; // No duplicates found
}

function addHousehold($connn, $houseno, $st, $prk, $datereg, $Munici, $brgy, $prv, $inhNo, $inh) {
	$sql = "INSERT INTO household (HouseNo, Street, Purok, Datereg, Municipality, Barangay, Province) VALUES (?, ?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($connn);
	mysqli_stmt_prepare($stmt, $sql);

	mysqli_stmt_bind_param($stmt, "sssssss", $houseno, $st, $prk, $datereg, $Munici, $brgy, $prv);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	househod($connn, $houseno, $inhNo, $inh);

	session_start();
	$_SESSION["statuss"] = "Household Successfully Added!";
	header("location: Household");
	exit();
}

function househod($connn, $houseno, $inhNo, $inh) {
	foreach ($inh as $as) {
		$sql2 = "INSERT INTO household2 (houseID, Inhabitants, InhabitantsNo) VALUES (?, ?, ?);";
		$stmt = mysqli_stmt_init($connn);
		mysqli_stmt_prepare($stmt, $sql2);

		mysqli_stmt_bind_param($stmt, "isi", $houseno, $as, $inhNo);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	return;
}
