<?php
$username= "root";
$password= "";
$server='localhost';
$db = 'water';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
}
else{
    die("Connection Failed" . mysqli_connect_error());
}
?>
