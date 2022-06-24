<?php

include("config.php");
$con=conection();

$id_mhs=$_GET['id'];

$sql="DELETE FROM mhs  WHERE id_mhs='$id_mhs'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
