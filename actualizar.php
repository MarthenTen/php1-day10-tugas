<?php
include("config.php");
$con = conection();

$id = $_GET['id'];

$sql = "SELECT * FROM mhs WHERE id_mhs='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>yaa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">

            <form action="update.php" method="POST" autocomplete="off">

<input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']  ?>">

<input type="text" class="form-control mb-3" name="nim" placeholder="Nim" value="<?php echo $row['nim']  ?>">
<input type="text" class="form-control mb-3" name="nama" placeholder="Nama" value="<?php echo $row['nama']  ?>">
<input type="text" class="form-control mb-3" name="jurusan" placeholder="Jurusan" value="<?php echo $row['jurusan']  ?>">

<input type="submit" class="btn btn-primary btn-block" value="Actualizar">
</form>

            </div>
        </div>
     
    </div>
</body>

</html>