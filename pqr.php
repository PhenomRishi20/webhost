<?php

$con=mysqli_connect("localhost","id19876161_student","Password","id19876161_student");
$row=$con->query("update abc123 set name='$_REQUEST[name]' where enrollment='$_REQUEST[enroll]'");
$con->close();
if($row>0)
echo "record updated";
else
echo "record not updated";
?>