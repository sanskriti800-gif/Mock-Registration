<?php
$servername = "localhost:3307";
$username = "root";
$password= "";
$dbname = "college registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$idno = $_POST['userid'];
$sname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['psw'];

$sql = "insert into stureg (Sid, Sname, Lname, Eid, Pass) values ('$idno','$sname','$lname','$email','$pass')";

if(mysqli_query($conn,$sql)){
    echo "Welcome <br>" . $sname . $lname ;
}else{
    echo "not success";
}
?>