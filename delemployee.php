<?php
include 'db_conn.php';
$id = $_GET['id'];
$deletequery = "delete from detail where id=$id";
$query = mysqli_query($con,$deletequery);
header('location:viewdetail.php');
?>