<?php
$servername = "localhost:3307";
$username = "root";
$password= "";
$dbname = "college registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$email = $_POST['email'];
$pass = $_POST['psw'];


$sql = "SELECT Eid, Pass, Sname FROM stureg where Eid='$email' and Pass='$pass'";

if ($res = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
            echo "Welcome Back ".$row['Sname'];
        }
    }
    else {
        echo "No matching records are found.";
    }
}




?>