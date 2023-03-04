<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "mock registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$course1 = $_POST['c1'];
$course2 = $_POST['c2'];
$course3 = $_POST['c3'];

if($course1 != $course2 && $course2 != $course3 && $course1!=$course3){
    echo "Registered Successfully";
}else{
    echo "400 Bad Request";
}


?>