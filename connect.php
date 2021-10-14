<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$Phonenumber = $_POST['Phonenumber'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$conn = new mysqli("localhost", 'root', '', 'blood_test');
if ($conn->connect_error) {
    die('connection failed:' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(first_name,last_name
    ,age,phonenumber,email,gender)values(?,?,?,?,?,?,?");
    $stmt->bind_param(
        "ssiiss",
        $first_name,
        $last_name,
        $age,
        $phonenumber,
        $email,
        $gender,
    );
    $stmt->execute();
    echo "registration successfuly....";
    $stmt->close();
    $conn->close();
}
?>