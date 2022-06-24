<?php

include("config.php");
$con=conection();

$id_mhs=$_POST['id_mhs'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];

$sql="UPDATE mhs SET  nim='$nim',nama='$nama',jurusan='$jurusan' WHERE id_mhs='$id_mhs'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>