<?php

ob_start();
require 'config/config.php';
include'functions.php';
$rboss = $conn->real_escape_string($_POST['rboss']);
$rhour = $conn->real_escape_string($_POST['rhour']);
$rmin = $conn->real_escape_string($_POST['rmin']);
$rampm = $conn->real_escape_string($_POST['rampm']);
$gname = $conn->real_escape_string($_POST['gname']);

$query = "SELECT glatitude, glongitude FROM gyms WHERE gid='$gname'";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$rows = mysqli_fetch_assoc($result);
$rlat=$rows["glatitude"];
$rlon=$rows["glongitude"];

$sql = "INSERT INTO spotraid (rboss, rhour, rmin, rampm, rlatitude, rlongitude) VALUES ('$rboss','$rhour','$rmin','$rampm','$rlat','$rlon')";
    if(!mysqli_query($conn,$sql))
        {
            echo 'Not Inserted';
        }
            else
            {
                echo 'Inserted';
            }
$sql1 = "UPDATE gyms SET actraid='1',actboss='$rboss' WHERE gid='$gname'";
    if(!mysqli_query($conn,$sql1))
        {
            echo 'Not Inserted';
        }
            else
            {
                echo 'Inserted';
            }                

    header('Location:submit-raid.php');
    
?>
