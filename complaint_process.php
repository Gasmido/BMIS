<?php
session_start();

	require_once 'db_conn.php';
	require 'func.php';

if (isset($_POST['submit'])) {
	
	$complaint_subject = $_POST["complaint_subject"];
	$complaint_details = $_POST["complaint_details"];
	$userid= $_POST["userid"];
	$useremail= $_POST["useremail"];

	// Set the timezone to Asia/Manila
	$timezone = new DateTimeZone('Asia/Manila');

	// Create a new DateTime object with the current date and time in the Manila timezone
	$datetime = new DateTime('now', $timezone);

	// Format the date and time
	$datetoday = $datetime->format('Y-m-d H:i:s');	


	createComplaint($connn, $complaint_subject, $complaint_details, $userid, $useremail, $datetoday);


} else {
	header("location: complaintt");
}

?>