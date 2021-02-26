<?php


$user ="root";
$password = "";
$host= "localhost";
$dbname="szkola";
$port= 3306;
$polaczenie= @new Mysqli($host,$user,$password,$dbname,$port);

if (mysqli_connect_errno()!=0) {

    echo("Error");
    # code...
}
else{
    echo("poloczono");
}


?>