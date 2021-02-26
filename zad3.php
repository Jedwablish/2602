<?php 
$user ="postgres";
$password = "root";
$host= "localhost";

$port= "5432";
$baza="szkola";

$ustawienia= "host=$host port=$port dbname=$baza user=$user password=$password";
$polaczenie = pg_connect($ustawienia);

$zapytanie = pg_query($polaczenie, "SELECT IDU, imie, nazwisko FROM uczniowie;");

if (!$zapytanie) {
    echo("error");
    exit();
    # code...
}

while ($row = pg_fatch_assoc($zapytanie)){
    echo $row['id']." ".$row['imie'].$row['nazwisko']."<br>";
}



?>