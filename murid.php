<?php
include("config.php");
$con = conection();

$sql = "SELECT *  FROM mhs";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5 ">
        <div class="row d-flex justify-content-between">
 
            <div class="col-md-3">
                <h1>Masukan Data</h1>
                <form action="insertar.php" method="POST" autocomplete="off">

                    <input type="text" class="form-control mb-3" name="id_mhs" placeholder="ID MHS">
                    <input type="text" class="form-control mb-3" name="nim" placeholder="Nim">
                    <input type="text" class="form-control mb-3" name="nama" placeholder="Nama">
                    <input type="text" class="form-control mb-3" name="jurusan" placeholder="Jurusan">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table ">
                    <thead class="table-secondary table-striped">
                        <tr class="text-center">
                            <th>Kode</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr class="text-center">
                                <th><?php echo $row['id_mhs'] ?></th>
                                <th><?php echo $row['nim'] ?></th>
                                <th><?php echo $row['nama'] ?></th>
                                <th><?php echo $row['jurusan'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['id_mhs'] ?>" class="btn btn-info">Edit</a></th>
                                <th><a href="delete.php?id=<?php echo $row['id_mhs'] ?>" class="btn btn-danger">Delete</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>