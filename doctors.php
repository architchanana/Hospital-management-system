<?php
$Name = $_POST['Name'];
$email = $_POST['email'];
$degree = $_POST['degree'];
$Phonenumber = $_POST['Phonenumber'];
$gender = $_POST['gender'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'database123');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into doctors(Name, email, degree,Phonenumber,gender) values(?,?, ?, ?, ?)");
	$stmt->bind_param("sssis", $Name, $email, $degree, $Phonenumber, $gender);
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}
