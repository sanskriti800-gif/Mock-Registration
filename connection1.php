<?php
$server_name="localhost:3307";
$username="root";
$password="";
$dbname="demo31";

$conn = mysqli_connect($server_name, $username, $password, $dbname);

// Create Database
// $sql = "create database demo31";

//Connection Checking
//if(!$conn){
//     die('connection failed' . mysqli_connect_error());
// }else{
//     echo 'Connection established';
//  }

//Create Table
//$sql = "create table stu31(id int, sname varchar(20), branch varchar(3),marks int(3))";

// Inserted Data
// $sql = "insert into stu31 (id, sname, branch, marks) values (1, 'Sanskrit' ,'CSE' ,100),(2,'Anoop' ,'CSE',85)";

//Updated Data
// $sql = "update stu31 set marks=90 where sname='Anoop'";

//Alter column
// $sql = "alter table stu31 add column grade varchar(1)";
// $sql = "update stu31 set sname='Sanskriti' where sname='Sanskrit'";
// $sql = "update stu31 set grade='F' where sname='Krisha'";

// Execute SELECT query
$result = mysqli_query($conn, "SELECT id, sname FROM stu31");

// Fetch data from result set
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"] . ", Name: " . $row["sname"] . "<br>";
}


?>






























<!-- <!DOCTYPE html>
<html>
<body>
<table>

echo "Chess Board <br>";

for($num = 0; $num < 8; $num++){
    $row = 0;
    echo "<tr>";
    $val = $num;
    while($row < 8){
        if($val % 2 == 0){
            echo "<td height=50px width=50px bgcolor=white></td>";
            $val = $val+1;
        }
        else{
            echo "<td height=50px width=50px bgcolor=black></td>";
            $val = $val+1;
        }
        $row++;
    }
    echo "</tr>";
}

</table>
</body>
</html>

$marks = 64;
// $marks = 34; -> Third
// $marks = 33; -> Fail
if($marks>=60){
    echo "First";
}
else if($marks<=59 && $marks>=45){
    echo "Second";
}
else if($marks<=44 && $marks>=34){
    echo "Third";
}
else if($marks<=33){
    echo "Fail";
}
 -->