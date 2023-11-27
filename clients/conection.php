<?php 

$dbhost = "localhost";
$dbuser ="root";
$dbpasseword="";
$dbname ="restoiaam";

$connect = mysqli_connect($dbhost,$dbuser,$dbpasseword,$dbname);


if(!$connect){
    die("check again please".mysqli_connect_error());
}
echo("connected successfully");
?>