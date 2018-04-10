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
//$conn_db = mysqli_select_db($conn,"test");
/*if(!$conn_db)
{
    die("unable to connect to database"); 
}*/

$regno=$_POST["regno"];
$rollno=$_POST["rollno"];
$pass=$_POST["pass"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobNum=$_POST["Number"];
$email=$_POST["mail"];
$temAdd=$_POST["TAdd"];
$perAdd=$_POST["PAdd"];
$dept=$_POST["dept"];
$cgpa=$_POST["cgpa"];
$backlogs=$_POST["backlogs"];
$marks12=$_POST["marks12"];
$board12=$_POST["board12"];
$marks10=$_POST["marks10"];
$board10=$_POST["board10"];
$about="abbb";
$sql = "INSERT INTO user(regNo,rollNo,email,mobNum,fname,lname, perAdd,temAdd,dept,cgpa,backlogs,board12,marks12,board10,marks10,about,pass) VALUES ('$regno', '$rollno','$email', '$mobNum', '$fname', '$lname', '$perAdd', '$temAdd', '$dept', '$cgpa', '$backlogs', '$board12', '$marks12', '$board10', '$marks10', '$about', '$pass')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

//(regNo,rollNo,email,mobNum,fname,lname, perAdd,temAdd,dept,cgpa,backlogs,board12,marks12,board10,marks10,about,pass)
//(`regNo`, `rollNo`, `email`, `mobNum`, `fname`, `lname`, `perAdd`, `temAdd`, `dept`, `cgpa`, `backlogs`, `board12`, `marks12`, `board10`, `marks10`, `about`, `
//pass`)

