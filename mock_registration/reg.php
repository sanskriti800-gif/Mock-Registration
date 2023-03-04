<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "mock registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_POST['name'];
$pass = $_POST['pass'];

$sql = "SELECT s_no, pass, s_name FROM enrolled_student where s_no='$id' and pass='$pass'";

if ($res = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
            echo "<a href= registration.html>START REGISTATION</a>  " . $row['s_name'] ;
        }
    }
    else {
        echo "400 Bad Request";
    }
}



?>