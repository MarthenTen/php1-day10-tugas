<?php
include("config.php");
$con=conection();

$id_mhs=$_POST['id_mhs'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];


$sql="INSERT INTO mhs VALUES('$id_mhs','$nim','$nama','$jurusan')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>