<?php
$dbhost="us-cdbr-east-02.cleardb.com";
    $dbuser="bb4cf1fd92535b";
    $dbpass="17760114";
    $dbname="pilotohackathon";
    $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn)
    {
        die("No hay conexion: ".mysqli_connect_error());
    }
?>