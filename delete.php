<?php
include 'connection.php';
$id = $_GET['id'];

$sql="DELETE  FROM `student_table` WHERE id='$id'";


$aarr= mysqli_query($conn,$sql);


?>
