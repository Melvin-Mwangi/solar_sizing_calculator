<?php
//delete operation
include 'admindb.php';
$deleteid = $_GET['deleteid'];
$sql = "DELETE FROM supplier WHERE id = $deleteid";
$result = mysqli_query($connect, $sql);
if ($result){
    echo "Deleted successfully";
    header('location:display.php');
}else{
    die(mysqli_error($connect));
}