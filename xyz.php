<?php
$con=mysqli_connect("localhost","id19876161_student","Paasword","id19876161_student");
$sql="insert into abc123 values( '$_REQUEST[enroll]','$_REQUEST[name]','$_REQUEST[branch]','$_REQUEST[semester]','$_REQUEST[email]') ";
$r=$con->query($sql);
if($r==1)
echo "record successful";
else
echo "try again";

$con->close();

?>