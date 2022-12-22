<?php

$con=mysqli_connect("localhost","id19876161_student","Password","id19876161_student");
$result=$con->query("select * from abc123");
echo "<table border=1><tr><th>Enroll<th>Name<th>Branch<th>Semester<th>email";
while($row=$result->fetch_assoc())
{
    echo "<tr><td>$row[Enrollment] <td>$row[Name] <td>$row[Branch] <td>$row[semester] <td>$row[email]<br>";
}
$con->close();

?>