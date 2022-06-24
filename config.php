<?php
function conection(){
    $host = "localhost";
    $user = "root";
    $pass= "";
    $db = "murid";
    $conect = mysqli_connect($host,$user,$pass);
    mysqli_select_db($conect,$db);
    return $conect;

}
?>