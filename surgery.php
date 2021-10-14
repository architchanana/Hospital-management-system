<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "database123";

$conn = mysqli_connect($servername, $username, $password, $database_name);
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}
if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $Phonenumber = $_POST['Phonenumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $sql_query = "INSERT INTO surgery(first_name,last_name
    ,age,Phonenumber,email,gender)
    VALUES('$first_name','$last_name','$age','$Phonenumber','$email','$gender')";
    if (mysqli_query($conn, $sql_query)) {
        echo '<script>alert("We got your informartion and we will reach out to you soon.")</script>';
    } else {
        echo "error" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
