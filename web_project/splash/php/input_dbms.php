<?php
$servername = "localhost";
$username = "root";
$dbname = "jobportal";
$password="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$regno=$_POST["regno"];
$pass=$_POST["pass"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$Number=$_POST["Number"];
$mail=$_POST["mail"];
$TAdd=$_POST["TAdd"];
$PAdd=$_POST["PAdd"];
$dept=$_POST["dept"];
$cgpa=$_POST["cgpa"];
$backlogs=$_POST["backlogs"];
$marks12=$_POST["marks12"];
$board12=$_POST["board12"];
$marks10=$_POST["marks10"];
$board10=$_POST["board10"];
$sql = "INSERT INTO Students (firstname, lastname, email)
VALUES ($fname,$lname,$Number,$mail,$TAdd,$PAdd,$dept,$cgpa,$backlogs,$marks12,$board12,$marks10,$board12)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
