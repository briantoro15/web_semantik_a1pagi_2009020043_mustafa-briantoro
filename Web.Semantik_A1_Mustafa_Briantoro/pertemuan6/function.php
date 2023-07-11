<?php


function koneksi(){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "web-semantik-a1-2009020043-mustafabriantoro";
    return mysqli_connect($server, $username, $password, $database);
}
?>